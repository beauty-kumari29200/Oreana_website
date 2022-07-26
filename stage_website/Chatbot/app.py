from flask import Flask, render_template, request, jsonify
from chat import get_response

app = Flask(__name__)

@app.get("/") #new method for declaration in flask 2.0 in old we have to use app.route method
def index_get():
    return render_template("base.html")


#function for prediction 
@app.post("/predict")
def predict():
    text = request.get_json().get("message")

    response = get_response(text)
    message = {"answer": response}
    return jsonify(message)

if __name__ == "__main__":
    app.run(debug=True)    
