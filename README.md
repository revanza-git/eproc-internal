# E-Procurement System

A comprehensive e-procurement system built with CodeIgniter framework, designed to streamline and manage the procurement process efficiently.

## Features

1. **User Management**
   - Secure authentication system
   - Role-based access control (Admin, User, Approver)
   - Password management and reset functionality

2. **Procurement Management**
   - Purchase Request (PR) creation and management
   - Purchase Order (PO) processing
   - Vendor management and registration
   - Contract management and tracking
   - Budget control and monitoring

3. **Document Management**
   - Document upload and storage
   - Document version control
   - Attachment management for approvals
   - File type validation and security

4. **Workflow Management**
   - Multi-level approval process
   - Status tracking and notifications
   - Timeline visualization
   - Email notifications for status changes
   - Approval delegation

5. **Reporting & Analytics**
   - Custom report generation
   - Data export functionality (PDF, Excel)
   - Timeline exports
   - Backup management
   - Dashboard analytics

## Technical Stack

- **Framework**: CodeIgniter 3.x
- **PHP Version**: >= 7.4
- **Database**: MySQL 5.7+
- **Web Server**: Apache/IIS
- **Additional Libraries**:
  - TCPDF (for PDF generation)
  - PHPSpreadsheet (for Excel export)
  - PHPMailer (for email notifications)
  - jQuery (for frontend interactions)
  - Bootstrap 4 (for UI components)

## Prerequisites

- PHP >= 7.4
- MySQL 5.7+
- Apache/IIS Web Server
- Composer (for dependency management)
- SSL Certificate (for production)
- SMTP Server (for email notifications)

## Installation Steps

1. **Clone the Repository**
   ```bash
   git clone [repository-url]
   cd eproc_nusantararegas
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Database Setup**
   - Create a new MySQL database
   - Import the database schema from `application/database/`
   - Configure database connection in `application/config/database.php`
   - Set up initial admin user

4. **Configuration**
   - Copy `application/config/config.example.php` to `application/config/config.php`
   - Update the base URL and other configurations
   - Configure email settings in `application/config/email.php`
   - Set up SMTP credentials
   - Configure file upload settings

5. **Web Server Configuration**
   - For Apache: Enable mod_rewrite and configure .htaccess
   - For IIS: Use the provided `web.config`
   - Point web server to the project's root directory
   - Configure SSL/TLS

6. **Permissions**
   - Set write permissions for:
     - `application/cache/`
     - `application/logs/`
     - `application/uploads/`
     - `application/backups/`

7. **Initial Setup**
   - Access the application through your web browser
   - Log in with default admin credentials
   - Change default passwords
   - Configure system settings
   - Set up email templates

## Usage

1. **Login**
   - Access the system through your web browser
   - Use your credentials to log in
   - Reset password if needed

2. **Creating a Purchase Request**
   - Navigate to the PR creation section
   - Fill in required details
   - Upload necessary documents
   - Add line items and quantities
   - Submit for approval

3. **Approval Process**
   - Approvers receive email notifications
   - Review and approve/reject requests
   - Add comments if needed
   - Track status through dashboard
   - Delegate approvals if necessary

4. **Generating Reports**
   - Access the reporting section
   - Select report type
   - Configure parameters
   - Export in desired format (PDF/Excel)
   - Schedule automated reports

## Security Considerations

- Enable SSL/TLS for all communications
- Implement strong password policies
- Regular security updates and patches
- Configure proper access controls
- Enable audit logging
- Implement rate limiting
- Regular security scanning

## Maintenance

- Regular database backups (daily)
- Log rotation and monitoring
- Cache clearing
- System updates
- Performance monitoring
- Security patches
- Backup verification

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
5. Configure monitoring and alerting
6. Test email notifications
7. Verify database backups 