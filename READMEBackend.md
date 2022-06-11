# Bird solutions code challenge

## Getting Started

### Installing Dependencies

 
#### laravel Dependencies

 

```bash
composer install
```
  
## Running the server


To run the server, execute:

```bash
php artisan serve
```

 
## API Referance
### Getting Start
- Base URL : At present this app run locally . The app is hosted at the local , `http://127.0.0.1:8000`
### Endpoint 
#### GET api//user-github-points/{:username}
- General:
    - End point that accepts a Github username, and returns that user’s “Score” 
- Require
     
        - username
- Sample:
    - `http://127.0.0.1:8000/api/user-github-points/ahmy1996404`
```
{
    "data": {
        "data": [
            {
                "type": "PushEvent",
                "repository": "bird-github-challenge",
                "date": "2022-06-11T06:47:11Z",
                "points": 10
            },
    
        ],
        "score": 10
    },
    "status": true
}
```
  ### Error Handling 
Errors are returned as JSON objects in the following format :
```
Status: 404,
{
      'status': False,
      'message':'resource not found'
}
```
The API will return three error types when requests fail:

- 400: bad request
- 401: Unauthorized request
- 404: resource not found
- 405: method not allowe
- 422: unprocessable
##Authors
Ahmed Hamouda
