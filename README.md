# Hello World API: <FRAMEWORK-NAME> + <PROGRAMMING-LANGUAGE-NAME> Sample

You can use this sample project to learn how to secure a simple <FRAMEWORK-NAME> API server using Auth0.

<DIAGRAM-OF-SYSTEM-ARCHITECTURE>

The `starter` branch offers a working API server that exposes three public endpoints. Each endpoint returns a different type of message: public, protected, and admin.

The goal is to use Auth0 to only allow requests that contain a valid access token in their authorization header to access the protected and admin data. Additionally, only access tokens that contain a `read:admin-messages` permission should access the admin data, which is referred to as [Role-Based Access Control (RBAC)](https://auth0.com/docs/authorization/rbac/).

[Check out the `add-authorization` branch]() to see authorization in action using Auth0.

[Check out the `add-rbac` branch]() to see authorization and Role-Based Access Control (RBAC) in action using Auth0.

## Get Started

TODO: Provide the reader detailed information on how to set up the project such as installing project dependencies and anything required for the reader to run the project successfully. For example, in a Node.js project one may state the following:

Install the project dependencies:

```bash
npm install
```

Run the project in dev mode:

```bash
npm run dev
```

Be precise and concise with this instructions. Link out to any relevant documentation if you need to provide more details on setting up.

## API Endpoints

The API server defines the following endpoints:

### 🔓 Get public message

```bash
GET /api/messages/public
```

#### Response

```bash
Status: 200 OK
```

```json
{
  "message": "The API doesn't require an access token to share this message."
}
```

### 🔓 Get protected message

> You need to protect this endpoint using Auth0.

```bash
GET /api/messages/protected
```

#### Response

```bash
Status: 200 OK
```

```json
{
  "message": "The API successfully validated your access token."
}
```

### 🔓 Get admin message

> You need to protect this endpoint using Auth0 and Role-Based Access Control (RBAC).

```bash
GET /api/messages/admin
```

#### Response

```bash
Status: 200 OK
```

```json
{
  "message": "The API successfully recognized you as an admin."
}
```

## Error Handling

### 400s errors

#### Response

```bash
Status: Corresponding 400 status code
```

```json
{
  "message": "Message that describes the error that took place."
}
```

### 500s errors

#### Response

```bash
Status: 500 Internal Server Error
```

```json
{
  "message": "Message that describes the error that took place."
}
```

cp .env .env.local


Uncomment 
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"

Comment DATABASE_URL
# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"