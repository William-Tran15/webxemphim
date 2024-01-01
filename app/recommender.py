import sys
import json
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import linear_kernel

lines = sys.stdin.readlines()

movie_id = json.loads(lines[0])
movie_data = json.loads(lines[1])

# Convert JSON data to DataFrame
movies = pd.DataFrame(movie_data)
# Combine relevant information into a feature representation for each movie
movies['combined_features'] = movies.apply(lambda row: ' '.join(row['genres']) + ' ' + row['country'], axis=1)

# Create a feature representation for each movie using TF-IDF
tfidf_vectorizer = TfidfVectorizer()
tfidf_matrix = tfidf_vectorizer.fit_transform(movies['combined_features'])

# Compute the cosine similarity between movies based on their features
cosine_sim = linear_kernel(tfidf_matrix, tfidf_matrix)

# Function to get movie recommendations based on item ID
def get_movie_recommendations(movie_id, n=5):
    # Find the index of the movie
    movie_index =movies.index[movies['_id'] == movie_id].tolist()[0]

    # Calculate the cosine similarity between the selected movie and all movies
    similarity_scores = list(enumerate(cosine_sim[movie_index]))

    # Sort movies by similarity score (descending order)
    similarity_scores = sorted(similarity_scores, key=lambda x: x[1], reverse=True)

    # Get indices of recommended movies
    movie_indices = [i[0] for i in similarity_scores[1:n+1]]  # Exclude the movie itself

     # Get recommended movie data (item objects)
    recommendations = [movie_data[index] for index in movie_indices]

    return recommendations

# Get movie recommendations for a specific movie ID
recommendations = get_movie_recommendations(movie_id, n=5)
print(json.dumps(recommendations, ensure_ascii=False))