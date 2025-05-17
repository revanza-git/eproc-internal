# E-Procurement System

A comprehensive e-procurement system built with CodeIgniter framework, designed to streamline and manage the procurement process efficiently. This system is part of a larger E-Procurement ecosystem that consists of three interconnected systems.

## System Flow Diagram

![E-Procurement System Flow](eproc_flow.jpg)

## E-Procurement Ecosystem

This system is part of a larger E-Procurement ecosystem that consists of three interconnected systems:

1. **Vendor Management System (VMS)** - [eproc-vms](https://github.com/revanza-git/eproc-vms)
   * Handles vendor registration and qualification
   * Manages vendor documents and compliance
   * Processes vendor assessments and evaluations

2. **Internal E-Procurement System** (current project)
   * Manages internal procurement processes
   * Handles purchase requests and orders
   * Controls budget and approvals
   * Requires admin access

3. **VMS Admin System** - [eproc-vms-admin](https://github.com/revanza-git/eproc-vms-admin)
   * Provides administrative controls
   * Manages system configurations
   * Handles user management
   * Requires admin access

### System Integration

* All three systems are designed to work together seamlessly
* Shared authentication and authorization
* Synchronized data across systems
* Unified reporting and analytics

### Detailed System Flow

#### 1. Vendor Management System (VMS) Flow
* **Vendor Registration**
  * Initial registration with basic company information
  * Document submission (legal documents, certifications)
  * Automated document validation
  * Initial screening and verification

* **Vendor Qualification**
  * Document verification process
  * Compliance checks
  * Risk assessment
  * Performance evaluation
  * Qualification status determination

* **Vendor Assessment**
  * K3 (Health & Safety) evaluation
  * CSMS (Contractor Safety Management System) assessment
  * Technical capability assessment
  * Financial stability check
  * Performance history review

#### 2. Internal E-Procurement Flow
* **Purchase Request (PR) Process**
  * PR creation and submission
  * Budget verification
  * Technical specification review
  * Multi-level approval workflow
  * Vendor selection from qualified pool

* **Purchase Order (PO) Management**
  * PO generation
  * Contract creation
  * Terms and conditions verification
  * Approval routing
  * Document finalization

* **Contract Management**
  * Contract execution
  * Performance monitoring
  * Payment processing
  * Contract renewal/termination
  * Compliance tracking

#### 3. VMS Admin System Flow
* **User Management**
  * User registration and role assignment
  * Access control configuration
  * Permission management
  * User activity monitoring
  * Security policy enforcement

* **System Configuration**
  * Workflow customization
  * Document template management
  * Email notification setup
  * System parameter configuration
  * Integration settings

* **Monitoring and Reporting**
  * System health monitoring
  * Performance metrics tracking
  * Audit log management
  * Report generation
  * Data analytics

### Integration Points

* **Data Synchronization**
  * Real-time vendor data updates
  * Document status synchronization
  * User authentication sharing
  * Transaction data consistency
  * Cross-system reporting

* **Workflow Integration**
  * Seamless handoff between systems
  * Automated status updates
  * Unified notification system
  * Consistent user experience
  * Integrated approval chains

* **Security Integration**
  * Single sign-on (SSO) capability
  * Unified access control
  * Centralized audit logging
  * Cross-system security policies
  * Integrated backup systems

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