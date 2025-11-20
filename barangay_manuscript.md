BARANGAY LIMPAPA INFORMATION SYSTEM



A Project Proposal
Presented to the Faculty of the College of [Your College Department] [Your Institution]


In Partial Fulfillment of the Requirements
for the subject Software Engineering 1


The Baresik Developers
Project Team / Proponents
Joshua Carl Faustino
Jervis Jan Nicolas
Nolan Jay Francisco
John Errol Galong
Eric Macas

Submitted to:
Instructor Name



Academic Year 2024—2025
Manuscript for a Software Engineering 1 Project________________________________________
CHAPTER I – DESCRIPTION OF THE SYSTEM
1. a. System Overview
1. a. 1. Introduction
The current system for managing Barangay Limpapa's administrative processes is largely manual. Resident registration, clearance requests, complaint filings, and announcement postings are handled using paper forms and spreadsheets. This leads to inefficiencies, long queues, difficulty in tracking requests, and limited access for residents outside office hours. The Barangay Limpapa Information System (BLIS) is a proposed web-based application designed to automate these processes. It will provide an online portal for resident registration, digital request submissions, automated status tracking, and a secure admin panel for barangay officials.
1. b. Project Site
The system will be deployed for use within Barangay Limpapa's office. The primary users (barangay officials) will access the system via computers located at the barangay hall. Residents will access the online portal and submission features via the internet from their homes or using public terminals within the barangay.
1. c. Background of the Client
(Since there is no real client, we create one)
Barangay Limpapa is a fictional local government unit dedicated to providing efficient services to its residents. It serves an average of 500 residents daily with services like clearances, complaint resolutions, and information dissemination. The barangay captain, Mr. Juan Dela Cruz, has expressed the need for a digital solution to reduce administrative workload and improve resident satisfaction. The barangay operates on a limited annual budget provided by the local government.
1. d. Required Main Module
(This is a high-level list of the system's main features)
1.	User Authentication Module: Handles registration and login for residents and officials.
2.	Resident Portal Module: Allows viewing announcements, checking statuses, and submitting requests.
3.	Request Management Module: Handles clearance requests, complaint filings, and status updates.
4.	Announcement Module: Allows officials to post and manage community announcements.
5.	Reporting Module: Generates reports on clearances, complaints, and resident activities.
6.	Admin Dashboard: Provides an overview of barangay operations for officials.
(You would then provide a diagram here, like a module hierarchy chart)
1. d. 1. Description of the Required Main Module
(Here, you would write a short paragraph describing each module from the list above in more detail.)
The User Authentication Module ensures secure access by verifying resident and official credentials. The Resident Portal Module serves as the main interface for residents to interact with the system. The Request Management Module automates the processing of clearances and complaints. The Announcement Module facilitates communication through digital postings. The Reporting Module compiles data for analysis. The Admin Dashboard offers tools for oversight and management.
________________________________________
CHAPTER II – THE COMPANY
(Since you are a student team, "The Company" is your project team. You give your team a name and create a profile.)
2. a. Company Profile
The Baresik Developers is a student-based software development group formed exclusively for the completion of the Software Engineering 1 course. Composed of five dedicated Information Technology students, the team is committed to applying software engineering principles to deliver a high-quality, functional project.
2. b. Company Logo
(You would create a simple logo for your team. For example, a box with the letters "PB" inside.)
2. c. Company Vision
To become a proficient and respected student team known for developing practical and well-engineered software solutions.
2. d. Company Mission
To successfully design, develop, and deploy the Barangay Limpapa Information System (BLIS) by applying rigorous software engineering methodologies, effective teamwork, and continuous learning.
2. e. Company Goals
1.	To complete the project within the academic semester timeline.
2.	To deliver a system that meets all specified functional and non-functional requirements.
3.	To gain hands-on experience in all phases of the software development lifecycle.
2. f. Company Policies
2. f. 1. Meetings
Team meetings will be held weekly, every Saturday, via online conference (Google Meet/Zoom). An agenda will be circulated beforehand. Attendance is mandatory.
2. f. 2. Funding
This is an academic project with no monetary funding. All tools used will be free and open-source (e.g., Visual Studio Code, GitHub, MySQL Community Server).
2. f. 3. Penalties
There are no financial penalties. However, consistent failure to meet deadlines or contribute to the project will be documented and may affect the individual's grade as per the course instructor's guidelines.
2. h. Organizational Structure
2. h. 1. Overall Structure
The team follows a flat structure with a Project Manager for coordination. All members are also part of the programming and testing teams.
2. h. 2. Management Team
•	Project Manager: Joshua Carl Faustino
2. h. 3. System Design Team
•	System Analyst: Jervis Jan Nicolas / Nolan Jay Francisco
•	UI/UX Designer: John Errol Galong
2. h. 4. Programming Team
•	All team members.
2. h. 5. Testing Team
•	All team members.
2. h. 6. Training Team
•	Eric Miclat (will prepare training materials for the "client" - in this case, the demo for the instructor).
2. h. 7. Documentation Team
•	All team members are responsible for documenting their own work, with Abkarhan Jalam consolidating the final manuscript.
(You would create an organizational chart diagram here)
2. i. Company Roles and Responsibilities
(Define the responsibilities for each role you listed in the structure. For example:)
2. i. 1. Project Manager
•	Creates and maintains the project schedule.
•	Facilitates team meetings.
•	Acts as the primary point of contact for the instructor.
•	Ensures the project stays on track.
2. i. 2. System Analyst
•	Leads the requirements gathering and analysis.
•	Creates the Software Requirements Specification (SRS).
•	Designs the system models (DFD, ERD).
...(and so on for other roles)
________________________________________
CHAPTER III – PROJECT PLAN
Create a Work Breakdown Structure (WBS) by breaking down the project into phases (Planning, Design, Development, Testing, Deployment) and then into smaller tasks.
- Planning Phase: Requirements gathering, team setup.
- Design Phase: Create diagrams, UI mockups.
- Development Phase: Code modules, integrate.
- Testing Phase: Unit testing, integration testing.
- Deployment Phase: Setup, training.
________________________________________
CHAPTER IV – PROJECT SCHEDULES
Assign realistic time estimates (in days) to each task from the WBS and create Gantt charts and network diagrams. An academic project might be planned over a 3-month period.
- Planning: 10 days
- Design: 20 days
- Development: 40 days
- Testing: 15 days
- Deployment: 5 days
________________________________________
CHAPTER V – PROJECT COSTING
Since there's no budget, estimate the cost based on time invested. Use Php 50/hour for student developers. Total man-hours: 300 hours. Cost: Php 15,000. ROI: Saved administrative time valued at Php 20,000/year.
________________________________________
CHAPTER VI – REQUIREMENTS ENGINEERING
Stakeholders: Barangay Captain, Officials, Residents.
Functional Requirements: "The system shall allow a resident to submit a clearance request online."
Non-Functional Requirements: "The system's homepage shall load in under 3 seconds."
________________________________________
CHAPTER VII – SYSTEM DESIGN
Here are the diagrams based on the system:

### 1. Project Title & Team
**Project Title**: Barangay Limpapa Information System  
**Team Members**:
- Project Manager: Joshua Carl Faustino
- System Analyst: Jervis Jan Nicolas / Nolan Jay Francisco
- Junior System Analyst: John Errol Galong
- System Programmer: Eric Miclat
- Quality Assurance: Abkarhan Jalam

### 2. Use Case Diagram (Text Description)
**Actors**:
- Resident
- Barangay Official

**Use Cases**:
**Resident**:
- Register/Login
- Request Clearance
- File Complaint
- View Announcements
- Check Status

**Barangay Official**:
- Authenticate Resident
- Process Clearance Requests
- Handle Complaints
- Post Announcements
- Generate Reports
- View Dashboard

**System**: Barangay Limpapa Information System (central)

### 3. Data Flow Diagram – Level 0 (Context Diagram)
**External Entities**:
- Resident
- Barangay Official

**Main Process**: 0 Barangay Limpapa Information System

**Data Flows**:
→ From Resident: Register/Login, Request Clearance, File Complaint, View Announcements  
← To Resident: Display Status, Show Announcements  

→ From Barangay Official: Authenticate Resident, Process Requests, Post Announcements, Generate Reports  
← To Barangay Official: Clearance Details, Complaint Logs, Reports  

**Data Stores**:
- Resident Database
- Clearance Records
- Complaint System
- Announcement Board
- Reports

### 4. Data Flow Diagram – Level 1 (Detailed)
**Processes**:
1. Resident Authentication
2. Clearance Request
3. Complaint Filing
4. Announcement Posting
5. Status Checking
6. Report Generation

**Data Stores**:
- D1: Resident Database
- D2: Clearance Database
- D3: Complaint Database
- D4: Announcement Database
- D5: Reports Database

**Data Flows** (main ones visible):
- Resident → 1.0 Authenticate → Resident DB
- Resident → 2.0 Request Clearance → Clearance DB
- Resident → 3.0 File Complaint → Complaint DB
- Barangay Official → 4.0 Post Announcement → Announcement DB
- Resident → 5.0 Check Status → Clearance/Complaint DB
- Barangay Official → 6.0 Generate Reports → Reports DB

### 5. ERD – Entity Relationship Diagram (Text Version)
**Entities & Attributes**:

1. **Resident**
   - ResidentID (PK)
   - FullName
   - Address
   - ContactNumber
   - Email
   - DateOfBirth

2. **Clearance**
   - ClearanceID (PK)
   - ResidentID (FK)
   - RequestType (e.g., Barangay Clearance)
   - RequestDate
   - Status (Pending/Approved/Rejected)
   - ApprovedBy (FK → Official ResidentID)

3. **Complaint**
   - ComplaintID (PK)
   - ResidentID (FK)
   - ComplaintType
   - Description
   - FiledDate
   - Status (Open/Resolved)

4. **Announcement**
   - AnnouncementID (PK)
   - Title
   - Content
   - PostedBy (FK → Official ResidentID)
   - PostedDate

5. **Report**
   - ReportID (PK)
   - GeneratedBy (FK → Official ResidentID)
   - ReportType (e.g., Clearance Summary, Complaint Logs)
   - GeneratedDate
   - Data

**Relationships**:
- Resident (1) — requests — (M) Clearance
- Resident (1) — files — (M) Complaint
- Resident (1) — views — (M) Announcement
- Official (1) — approves — (M) Clearance
- Official (1) — resolves — (M) Complaint
- Official (1) — posts — (M) Announcement
- Official (1) — generates — (M) Report

### 6. UML Class Diagram (Text Representation)
```
+--------------------+       +--------------------+
|     Resident       |<>---->|    Clearance      |
+--------------------+       +--------------------+
| -ResidentID: int   | 1    *| -ClearanceID: int |
| -FullName: string  |       | -ResidentID (FK)  |
| -Address: string   |       | -RequestType      |
| -ContactNumber     |       | -RequestDate      |
| -Email: string     |       | -Status: string   |
| -DateOfBirth       |       +--------------------+
+--------------------+
        ^                   +--------------------+
        |                   |    Complaint       |
        |                   +--------------------+
   +----------+            | -ComplaintID: int  |
   | Official |            | -ResidentID (FK)   |
   +----------+            | -ComplaintType     |
                           | -Description       |
                           | -FiledDate         |
                           | -Status: string    |
                           +--------------------+
                                    1
                                    *
                           +--------------------+
                           |  Announcement      |
                           +--------------------+
                           | -AnnouncementID: int|
                           | -Title: string     |
                           | -Content: string   |
                           | -PostedBy (FK)     |
                           | -PostedDate        |
                           +--------------------+
                                    *
                                    |
                           +--------------------+
                           |      Report        |
                           +--------------------+
                           | -ReportID: int     |
                           | -GeneratedBy (FK)  |
                           | -ReportType: string|
                           | -GeneratedDate     |
                           | -Data: string      |
                           +--------------------+
```

### 7. Sequence / Activity (Common Flow – Text)
**Main Success Scenario – Resident Requests Clearance**:
1. Resident → System: Login (username, password)
2. System → Resident DB: Validate credentials
3. System → Resident: Show dashboard
4. Resident → System: Submit clearance request
5. System → Clearance DB: Save request
6. Barangay Official → System: Review request
7. System → Clearance DB: Update status to Approved
8. System → Resident: Notify approval
9. Resident → System: Download clearance

(Include UI mockups and HIPO charts here as per design.)
________________________________________
CHAPTER VIII – TESTING PHASE
Write test cases: "Test Case 1: Login with valid credentials. Expected Result: User is redirected to the dashboard."
________________________________________
CHAPTER IX – TRAINING PHASE
Outline a plan for training officials: A 2-hour session covering system usage, with evaluation via quiz.
