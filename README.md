## Description:
This project is a straightforward customer data distrubution system with simulated REST API's. It uses a RESTful service that enables the sharing of customer information across three API's by supporting basic operations such as retrieval, insertion, deletion and updating of data.

## Customer Data Structure:
The customer data structure consists of an: <br /> 
- `id` <br />
- `name` <br />
- `last name` <br />
- `postal code` <br /> 
- `address` <br /> 
- `tax number` <br />
- `phone number` <br />

## API:
In order to make request, you need to prefix all calls with `api`.
Example for retrieving customer data for API1: `localhost:8000/api/api1/1`

**API1:**
- **GET:** `/api1/{id}` - Retrieve customer data by `id`.
- **INSERT:** `/api1` - Insert new customer data (`name and last name`, `address`, `postal code`, `tax number`).
- **UPDATE:** `/api1/{id}` - Update customer data by `id`.
- **DELETE:** `/api1/{id}` - Delete customer data by `id`.

**API2:**
- **GET:** `/api2/{id}` - Retrieve customer data by `id`.
- **INSERT:** `/api2` - Insert new customer data (`name`, `last name`, `address`, `postal code and post office name`, `tax number`).
- **UPDATE:** `/api2/{id}` - Update customer data by `id`.
- **DELETE:** `/api2/{id}` - Delete customer data by `id`.

**API3:**
- **GET:** `/api3/{id}` - Retrieve customer data by `id`.
- **INSERT:** `/api3` - Insert new customer data (`name_last name`).
- **UPDATE:** `/api3/{id}` - Update customer data by `id`.
- **DELETE:** `/api3/{id}` - Delete customer data by `id`.

## Key Features:
1. **Controller Structure:** The assignment employs a controller structure for managing API interactions, enhancing the organization and modularity of the code.

2. **Simulated REST APIs:** `APIs (API1, API2, API3)` are simulated through corresponding controllers, each designed to handle specific operations.

3. **Error Handling:** The controllers incorporate error handling mechanisms, providing meaningful responses in case of record not found or internal server errors. Detailed error logs are generated for debugging purposes.

4. **Database Interaction:** The controllers interact with the database using Laravel's Eloquent ORM, ensuring secure and efficient data retrieval, insertion, updating, and deletion.
   
## Conclusion: 
This project aims to create a simple customer data distribution system with simulated REST APIs. Contributions, feedback, and suggestions are highly appreciated.
