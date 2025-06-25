## Updates for Commit #4:
- Added *hasNoSpaces* method in the BaseValidator for usernames and password.
- Added functions for `names()` for the first few input fields.
- Added *block paste* for the confirm password input field to ensure that the user will type it.
- Added the `Username` validator class!
- All input fields (except for `confirm_password` are validated)

## Next Updates:
- [ ] Work on `confirm_password` (Figure out the logic)
- [ ] Use Validator for Login
- [ ] Database connection/class
- [ ] Authenticator

## More additions:
- CRUD for Expenses
- Email/SMS for Two-Factor Authentication

# Project Summary:
- Laravel-inspired file structure and validation style.
- Built on concepts from Laracasts' PHP for Beginners course, extended with custom validators and a modular structure.
- I wanted a *To-do list* style app but a bit more niche haha.

## Username standards:
- Minimum of 6 characters
- Maximum of 15 characters
- Only ASCII characters
- Must start with a letter
- No Spaces
- No special characters other than the underscore (_)

## Password Standards
- Minimum of 8 characters
- Maximum of 30 characters
- Only ASCII characters
- No Spaces
- Must contain at least one uppercase letter, one lowercase letter, one number, and one special character.