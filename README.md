## Updates for Commit #2:
- Created a `BaseValidator` class to validate a few input fields. 
    - Might just be for Strings/Expenses in the future, for now it contains *Email* and *Password* methods.
- The *Password* method within `BaseValidator` is to be moved and made into it's own class, within the `Validator` directory.
- Composer (Autoloading) was implemented.

## Next Updates:
- Database Connection
- Authenticator and (more) Validator functions

## More additions:
- CRUD for Expenses
- Email/SMS for Two-Factor Authentication
- Autoloader from Composer

# Project Summary:
- Laravel-style naming
- Logic came from Laracasts' PHP for Beginners course, with a couple of tweaks.
    - Separate Validators for Password and Username.
- I wanted a *To-do list* style app but a bit more niche haha.