# E-Procurement System

A comprehensive e-procurement system built with CodeIgniter framework, designed to streamline and manage the procurement process efficiently.

## Features

1. **User Management**
   - Secure authentication system
   - Role-based access control
   - Password management

2. **Procurement Management**
   - Purchase Request (PR) creation and management
   - Purchase Order (PO) processing
   - Vendor management
   - Contract management

3. **Document Management**
   - Document upload and storage
   - Document version control
   - Attachment management for approvals

4. **Workflow Management**
   - Multi-level approval process
   - Status tracking
   - Timeline visualization
   - Email notifications

5. **Reporting & Analytics**
   - Custom report generation
   - Data export functionality
   - Timeline exports
   - Backup management

## Technical Stack

- **Framework**: CodeIgniter 3.x
- **PHP Version**: >= 5.2.4
- **Database**: MySQL
- **Web Server**: Apache/IIS
- **Additional Libraries**:
  - Paragonie Random Compat (for better randomness in PHP 5.x)
  - VFSStream (for development testing)

## Prerequisites

- PHP >= 5.2.4
- MySQL Database
- Apache/IIS Web Server
- Composer (for dependency management)

## Installation Steps

1. **Clone the Repository**
   ```bash
   git clone [repository-url]
   cd eproc
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Database Setup**
   - Create a new MySQL database
   - Import the database schema (located in `application/database/`)
   - Configure database connection in `application/config/database.php`

4. **Configuration**
   - Copy `application/config/config.example.php` to `application/config/config.php`
   - Update the base URL and other configurations
   - Configure email settings in `application/config/email.php`

5. **Web Server Configuration**
   - For Apache: Ensure mod_rewrite is enabled
   - For IIS: Use the provided `web.config`
   - Point your web server to the project's root directory

6. **Permissions**
   - Set write permissions for:
     - `application/cache/`
     - `application/logs/`
     - `application/uploads/`

7. **Initial Setup**
   - Access the application through your web browser
   - Log in with default credentials (if any)
   - Change default passwords immediately

## Usage

1. **Login**
   - Access the system through your web browser
   - Use your credentials to log in

2. **Creating a Purchase Request**
   - Navigate to the PR creation section
   - Fill in required details
   - Upload necessary documents
   - Submit for approval

3. **Approval Process**
   - Approvers will receive email notifications
   - Review and approve/reject requests
   - Track status through the dashboard

4. **Generating Reports**
   - Access the reporting section
   - Select report type
   - Configure parameters
   - Export in desired format

## Security Considerations

- Remove any company-specific branding before deployment
- Update all default credentials
- Configure proper access controls
- Enable SSL/TLS for secure communication
- Regular security updates and patches

## Maintenance

- Regular database backups
- Log rotation
- Cache clearing
- System updates

## Support

For support or inquiries, please contact:
- Email: revanza.raytama@gmail.com
- LinkedIn: [Revanza Raytama](https://linkedin.com/in/revanzaraytama)

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contributing

Please read CONTRIBUTING.md for details on our code of conduct and the process for submitting pull requests.

---

**Note**: Before using this project in production, ensure to:
1. Remove all company-specific branding and trademarks
2. Update all configuration files with your specific settings
3. Perform thorough security testing
4. Set up proper backup procedures 