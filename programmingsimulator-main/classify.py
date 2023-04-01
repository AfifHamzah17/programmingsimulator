# import pandas as pd
# import numpy as np
# from sklearn.naive_bayes import GaussianNB,MultinomialNB
# from sklearn.metrics import accuracy_score,hamming_loss
# from sklearn.model_selection import train_test_split
# from sklearn.feature_extraction.text import TfidfVectorizer
# from skmultilearn.problem_transform import BinaryRelevance
# from skmultilearn.problem_transform import ClassifierChain
# from skmultilearn.problem_transform import LabelPowerset
# import neattext as nt
# import neattext.functions as nfx
# import nltk
# import sys

# df = pd.read_csv("dataset-error.csv")
# df.head()
# df.dtypes

# df['message'].apply(lambda x:nt.TextFrame(x).noise_scan())
# df['message'].apply(lambda x:nt.TextExtractor(x).extract_stopwords())
# df['message'].apply(nfx.remove_stopwords)

# corpus = df['message'].apply(nfx.remove_stopwords)

# tfidf = TfidfVectorizer()
# Xfeatures = tfidf.fit_transform(corpus).toarray()

# y = df[['parse', 'fatal', 'warning','notice']]
# X_train,X_test,y_train,y_test = train_test_split(Xfeatures,y,test_size=0.3,random_state=42)
# binary_rel_clf = BinaryRelevance(MultinomialNB())
# binary_rel_clf.fit(X_train,y_train)

# br_prediction = binary_rel_clf.predict(X_test)
# br_prediction.toarray()

# def build_model(model,mlb_estimator,xtrain,ytrain,xtest,ytest):
#     clf = mlb_estimator(model)
#     clf.fit(xtrain,ytrain)
#     clf_predictions = clf.predict(xtest)
#     acc = accuracy_score(ytest,clf_predictions)
#     ham = hamming_loss(ytest,clf_predictions)
#     result = {"accuracy:":acc,"hamming_score":ham}
#     return result

# clf_chain_model = build_model(MultinomialNB(),ClassifierChain,X_train,y_train,X_test,y_test)
# clf_labelP_model = build_model(MultinomialNB(),LabelPowerset,X_train,y_train,X_test,y_test)

# ex1 = sys.argv[1]
# vec_example = tfidf.transform([ex1])
# binary_rel_clf.predict(vec_example).toarray()
# print(binary_rel_clf.predict(vec_example).toarray())

import pandas as pd
import numpy as np
from sklearn.naive_bayes import GaussianNB, MultinomialNB
from sklearn.metrics import accuracy_score, hamming_loss
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import TfidfVectorizer
from skmultilearn.problem_transform import BinaryRelevance
from skmultilearn.problem_transform import ClassifierChain
from skmultilearn.problem_transform import LabelPowerset
import neattext as nt
import neattext.functions as nfx
import nltk
import sys


def execute_code(code):
    # Read data from CSV file
    df = pd.read_csv("dataset-error.csv")

    # Clean up data
    df['message'].apply(lambda x: nt.TextFrame(x).noise_scan())
    df['message'].apply(lambda x: nt.TextExtractor(x).extract_stopwords())
    df['message'].apply(nfx.remove_stopwords)
    corpus = df['message'].apply(nfx.remove_stopwords)

    # Convert text data to features
    tfidf = TfidfVectorizer()
    Xfeatures = tfidf.fit_transform(corpus).toarray()
    y = df[['parse', 'fatal', 'warning', 'notice']]

    # Split data into training and testing sets
    X_train, X_test, y_train, y_test = train_test_split(
        Xfeatures, y, test_size=0.3, random_state=42)

    # Train model and make predictions
    binary_rel_clf = BinaryRelevance(MultinomialNB())
    binary_rel_clf.fit(X_train, y_train)
    br_prediction = binary_rel_clf.predict(X_test)
    br_prediction.toarray()

    # Calculate accuracy and hamming score
    def build_model(model, mlb_estimator, xtrain, ytrain, xtest, ytest):
        clf = mlb_estimator(model)
        clf.fit(xtrain, ytrain)
        clf_predictions = clf.predict(xtest)
        acc = accuracy_score(ytest, clf_predictions)
        ham = hamming_loss(ytest, clf_predictions)
        result = {"accuracy:": acc, "hamming_score": ham}
        return result

    clf_chain_model = build_model(
        MultinomialNB(), ClassifierChain, X_train, y_train, X_test, y_test)
    clf_labelP_model = build_model(
        MultinomialNB(), LabelPowerset, X_train, y_train, X_test)


ex1 = sys.argv[1]
vec_example = tfidf.transform([ex1])
binary_rel_clf.predict(vec_example).toarray()
print(binary_rel_clf.predict(vec_example).toarray())
