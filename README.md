# MovTic Cinema Website

## Course: CS 2111-2 Web Application Development

## Project Overview
The MovTic Cinema Website is designed to provide a user-friendly platform for movie enthusiasts to browse and book e-tickets for the latest movies. The website targets anyone looking to easily book tickets for movies at MovTic cinemas.

### Functionalities:
- Display comprehensive details about movies, including name, release date, age restriction, genres, cast members, duration, and synopsis.
- Enable users to book tickets after signing up or logging in.
- Allow users to select movie, date, time, and seat for booking.
- Admin functionalities to update or delete any movie in the database.

### Technical Overview:

#### Front-End:
- **Total Page Count**: 7 Pages including Home, Movies Info, Sign Up, Log In, Book a Ticket, Admin, and Update Page.
- **External Stylesheets**: Style1.css, Style2.css
- **CSS Framework**: Bootstrap for design.
- **JavaScript Interactivity**: Enhancements using CSS for hover effects and JavaScript for shadow effects on movie posters.

#### Back-End:
- **Database Interactions**: Implemented CRUD operations for user and admin interactions.
    - Create: Insert new records during sign up and ticket booking.
    - Read: Retrieve movie details and display records in the admin page.
    - Update: Admin page allows updating movie information.
    - Delete: Admin page allows deletion of movies from the database.

#### Miscellaneous:
- **Admin Credentials**: Specific user types defined in the database for access control.
- **Sessions**: Used to track user choices and display personalized information.
- **Input Validation**: JavaScript used for validating user input in login and sign-up.

---

# Setup and Installation:

### Prerequisites:
- Web Server (e.g., Apache, Nginx)
- PHP
- MySQL Database
- Web Browser

### Steps:
1. **Install a Web Server**: Install a web server like Apache or Nginx on your machine.
2. **Install PHP**: Ensure PHP is installed and configured to work with your web server.
3. **Set Up MySQL Database**: Install MySQL and set up a database using the provided schema. Import any initial data if provided.
4. **Clone Repository**: Clone or download the project repository to your local machine.
5. **Configure Web Server**: Point your web server to the cloned repository's directory as the root for the MovTic Cinema Website.
6. **Configure Database Connection**: Update the database connection settings in the project's configuration files to match your local or hosted MySQL settings.
7. **Permissions**: Ensure the web server has the necessary permissions to read and write to the project directory.

### Running the Application:
- Open your web browser and navigate to your local server's address (e.g., http://localhost/ if running locally).
- You should be presented with the MovTic Cinema Website's home page.

# Usage:

### Browsing Movies:
- **Home Page**: Start at the Main Home Page to browse the latest movies.
- **Movies Info**: Click on any movie poster to view detailed information such as release date, age restriction, genres, and synopsis.

### Booking Tickets:
- **Sign Up/Login**: To book tickets, navigate to the Sign Up or Log In page to create an account or log in.
- **Book a Ticket**: Once logged in, choose the 'Book a Ticket' option.
    - **Select a Movie**: Choose a movie from the list.
    - **Choose Date and Time**: Select the desired show date and time.
    - **Select Seat**: Pick an available seat.
    - **Confirmation**: Confirm the booking and your ticket will be reserved and added to the database.
  
### Admin Functions:
- **Admin Login**: Log in with admin credentials to access the admin dashboard.
- **Update/Delete Movies**: Admins can update movie details or delete movies from the database.

### Interactivity and Validation:
- Enjoy interactive elements such as hover effects on movie posters.
- The website validates user inputs in the sign-up and login pages to ensure data integrity and security.

  
© `<Jana-Abu-Hantash>`, `<abuhantash.jana@gmail.com>`, and `<2022>`.

