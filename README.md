# Bird solutions code challenge

## Full stack github points app

The code challenge is split into two parts the first part is a simple backend api endpoint using laravel, showing you can leverage Laravel Collections to create an elegant solution to the following problem.
Create a controller method that accepts a Github username, and returns that user’s “Score” based on the following rules.
1. PushEvent = 10 points
2. PullRequestEvent = 5 points
3. IssueCommentEvent = 4 points
4. Any other event = 1 point
And return: 
```bash

{
	data: [
	{
		type: "PushEvent",
		repository: "spatie/fractalistic"
		date: "2021-09-01T10:05:40Z",
		points: 10
    },
	
	],
	score: 10,
}
```
 
## About the Stack

i started the full stack application for you. It is desiged with some key functional areas:

### Backend

[View the READMEBackend.md within ./backend for more details.](./READMEBackend.md)

### Frontend

 
[View the READMEFrontend.md within ./frontend for more details.](./READMEFrontend.md)
