> [!NOTE]
> This project is not in its final form. 

# Mentora Nexus - Online Bookstore Portal

This is the official web application for `mentoranexus.com`, the fictional company from the "Enterprise Network Design" project. This application is the user-facing portal, designed to be hosted on the HTTP server (10.60.111.103) within that network.

The project is a dynamic website that is currently evolving from its original "Library Resource Portal" concept into a functional online bookstore.

## Features

  * **Multi-Page Website:** A full website structure with a homepage, 'About', 'Visit', and 'Contact' sections.
  * **Customizable Homepage Video:** The main homepage (`index.php`) features a video player section that can be easily modified to embed any video you like (e.g., from YouTube or a local file).
  * **User Authentication:** A complete user management system:
      * User-facing 'Sign Up' and 'Sign In' forms.
      * Backend PHP scripts for handling registration (`register.php`) and authentication (`authenticate.php`).
      * A simple JSON file (`users.json`) acts as the current user database.
  * **Bookstore Functionality:**
      * **Bestsellers:** A section dedicated to bestselling books, with individual pages for each item (e.g., `clean_code.php`).
      * **New Arrivals:** A section for new books, also with dedicated product pages.
  * **Documentation:** Includes the full project design and development specification document.

## Technology Stack

  * **Backend:** **PHP** (for server-side logic, user authentication, and page templating).
  * **Frontend:** **HTML5** and **CSS3** (for all styling, organized into component files like `header.css`, `footer.css`, and `main.css`).
  * **Data Storage:** A simple **JSON** file (`users.json`) is currently used for storing registered user data.

## Future Improvements

This project is under development. Planned enhancements include:

  * **SQL Database:** Migrating the user and product data from flat files (like `users.json`) to a robust SQL database (e.g., MySQL or PostgreSQL) for scalability.
  - [ ] Interactive UI:** Enhancing the frontend with JavaScript for a more dynamic and responsive user experience.
  - [ ] Search Box:** Implementing a functional search feature to allow users to find books by title, author, or category.
  - [ ] Shopping Cart:** Building a complete e-commerce shopping cart and checkout system.
  - [ ] Book Expansion:** Greatly expanding the quantity and variety of books available in the store's inventory.

## How to Run

To run this project, you need a local server environment that supports PHP (e.g., XAMPP, MAMP, WAMP).

1.  Clone this repository into your local server's web directory (e.g., `htdocs` in XAMPP).
2.  Start your Apache server.
3.  Open your web browser and navigate to `http://localhost/mentoranexus-library-portal/` (or the name of the directory you cloned it into).

## Project Structure

```
/
├── About/              # PHP files for the 'About' section
├── Bestsellers/        # PHP files for 'Bestsellers' books
├── Contact/            # PHP file for the 'Contact' page
├── Images/             # All visual assets (logos, backgrounds, book covers)
├── New-Arrivals/       # PHP files for 'New-Arrivals' books
├── Users/              # User authentication forms (HTML) and logic (PHP)
├── Visit/              # PHP file for the 'Visit' section
├── css/                # All CSS stylesheets
├── index.php           # The main homepage
└── MentoraNexus - Documentation.docx  # Project specification document
```
