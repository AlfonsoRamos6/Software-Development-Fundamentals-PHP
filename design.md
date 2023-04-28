 # Project Overview
 
This site is a shopping cart website that sells chairs on the website. This website will be made using PHP. This website will allow users to register themselves for an account, login to that account and logout of that account. Other features of the page include a contact us page, where users can send a message to the administrators where they send their email as well for further conversations if needed. This website's main page, the shopping cart, allows the user to add the items and the amount wanted into a shopping cart where they can then order what is in their shopping cart. 
## User Management
A user can register themselves to make an account on the website, once a user has been registered, they have the ability to login and logout of the website as they please. 

Users will have names, their date of birth, access level and hashed password stored in the website.

There are two access levels for this website, administrator and user, administrator has the ability to change the website, whereas users can only see the website and make no changes.

The user's account password will be stored as a hashed password, meaning no one will know the password of a user except for that user. 
## Product Management
Administrators of the website can add, remove or edit the products of the website. Each product will have a name, a price, and a photo of the product.
 
 # Behaviour User Journey

```mermaid
journey
 title Login / Log off
 section Login
  Load main (home) page: 5: Unauthenticated User
  Enter login details: 5: Unauthenticated User
  Press Login Button: 5: Unauthenticated User
 section Registered
  Perform site Actions:5: Authenticated User
 section Logoff
  Press Logoff Button in Navbar:5: Authenticated User
  Close Browser:5: Unauthenticated User
```
```mermaid
journey
 title Contact Us
 section Contact Us
  Load Contact Us page: 5: Any User
  Enter Email Address: 5: Any User
  Enter Message: 5: Any User
  Press Submit: 5: Any User
```
```mermaid
journey
 title Order
 section Order Form
  Load Order Form page: 5: Any User
  Enter First Name: 5: Any User
  Enter Second Name: 5: Any User
  Enter Address: 5: Any User
  Enter Phone Number: 5: Any User
  Enter Email Address: 5: Any User
  Enter Quantity for Products: 5: Any User
  Press Submit: 5: Any User
```



 # Planning Diagram - Wireframes

! (Main page Wireframe)(image/wireframes/wireframe.jpg)
