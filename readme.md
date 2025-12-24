# 📦 JSON Fake API – Simple REST API for Testing

This is a free, online REST API providing fake JSON data. It’s ideal for **testing, prototyping, demos, tutorials, and example code** where you need a backend that returns predictable JSON responses.

## 🚀 Features

* ✅ Fake online REST API with realistic sample endpoints
* ✅ Useful for frontend development, tests & learning
* ✅ Works with **HTTP & HTTPS**
* ✅ Supports full set of HTTP verbs (GET, POST, PUT, PATCH, DELETE)

## 🧠 What This API Is

This service returns fake JSON data to simulate a real backend. All data is static and ideal for use in development or examples where a backend isn’t available. It follows typical REST conventions, returning structured JSON objects and arrays. JSON (JavaScript Object Notation) is a lightweight, text-based format that’s both human- and machine-readable — and widely used in APIs and data interchange. ([Wikipedia][1])

## 📌 Example Usage

In a browser or Node.js console:

```js
fetch('https://json.maxham.de/posts/1')
  .then(res => res.json())
  .then(data => console.log(data))
```

This will log the JSON object for post with ID `1`.

## 📚 Available Resources

You can use these routes to fetch lists and individual records:

```
/posts        → 100 post objects  
/comments     → 500 comment objects  
/albums       → 100 album objects  
/photos       → 5000 photo objects  
/todos        → 200 todo objects  
/users        → 10 user objects  
```

## 🔄 Supported REST Routes

| Method | Path                 | Description            |
|--------|----------------------|------------------------|
| GET    | `/posts`             | List all posts         |
| GET    | `/posts/1`           | Get post with ID 1     |
| GET    | `/posts/1/comments`  | Comments for post 1    |
| GET    | `/comments?postId=1` | Query comments by post |
| GET    | `/posts?userId=1`    | Query posts by user    |
| POST   | `/posts`             | Create a new post      |
| PUT    | `/posts/1`           | Replace post with ID 1 |
| PATCH  | `/posts/1`           | Update post with ID 1  |
| DELETE | `/posts/1`           | Delete post with ID 1  |

*All HTTP verbs are supported.* ([Link to API][2])

## 🛠️ Use Cases

✅ Prototyping frontend apps
✅ Testing API calls
✅ Sharing example code
✅ Teaching REST or fetch requests
✅ Mocking backend behavior without a server

## 💡 Notes

* This API returns fake/static data — it does **not** persist changes between requests.
* Designed for simplicity and convenience.

## ❤️ Made By

Built by **Toby Maxham** — thanks for using this fake JSON API for your projects! ([Link to API][2])

[1]: https://de.wikipedia.org/wiki/JSON?utm_source=chatgpt.com "JSON"
[2]: https://json.maxham.de/ " - Maxham.de"
