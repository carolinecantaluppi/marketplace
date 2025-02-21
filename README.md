# Marketplace

Marketplace is an integrated platform that combines e-commerce functionality with a blogging system. 
Users can buy and sell products as well as publish articles, creating a dynamic community-driven environment.

## Features

- **Product Listings**: Users can list products for sale with detailed descriptions and images.
- **Shopping Cart**: Buyers can add products to their cart and proceed to checkout seamlessly.
- **Order Management**: Sellers can manage orders, track sales, and update product availability.
- **Blog System**: Users can create, edit, and publish articles to engage with the community.
- **User Authentication**: Secure registration and login system to protect user data.

## Technologies Used

- **Backend**: PHP
- **Frontend**: JavaScript, CSS, HTML, Bootstrap

## Installation

To set up the project locally:

1. **Clone the repository**:
   git clone https://github.com/carolinecantaluppi/marketplace.git

2. **Enter the file**
   cd marketplace

3. **Install dependencies:**
    composer install
    npm install

4. **Set up environment variables:**
    **Copy .env.example to .env:**
    cp .env.example .env

    **Update .env with your database and mail server configurations.**

5. **Generate application key:**
    php artisan key:generate

6. **Run database migrations:**
    php artisan migrate

7. **Compile assets:**
    npm run dev

8. **Start the development server:**
    php artisan serve

9. **The application should now be running at:**
    http://localhost:8000.
