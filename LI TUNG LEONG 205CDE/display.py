from flask import Flask

app = Flask(__name__)
@app.route("/")
def display():
	return 'Open Hour: 08:00-22:30, Mon-Sun Our location: TaiWai, Hong Kong  Tel.:00000000 Email: PinionCinema@mail.com  Price: $50 each (children ticket fee same as adults)'
	