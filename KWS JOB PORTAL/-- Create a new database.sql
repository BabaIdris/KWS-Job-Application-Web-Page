-- Create a new database
CREATE DATABASE JobApplicationDB;

-- Use the newly created database
USE JobApplicationDB;

-- Create a table to store the job application details
CREATE TABLE JobApplications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vacancy_post VARCHAR(255),
    vacancy_no VARCHAR(255),
    first_name VARCHAR(100),
    middle_name VARCHAR(100),
    surname VARCHAR(100),
    title VARCHAR(50),
    date_of_birth DATE,
    id_no VARCHAR(50),
    pin_no VARCHAR(50),
    gender ENUM('Male', 'Female', 'Inter Sex', 'All Gender'),
    nationality VARCHAR(100),
    ethnicity VARCHAR(100),
    ethnicity_sub_group VARCHAR(100),
    home_county VARCHAR(100),
    sub_county VARCHAR(100),
    postal_address VARCHAR(255),
    postal_code VARCHAR(10),
    town_city VARCHAR(100),
    telephone_no VARCHAR(50),
    mobile_no VARCHAR(50),
    email_address VARCHAR(255),
    alt_contact_name VARCHAR(100),
    alt_contact_telephone VARCHAR(50),
    living_with_disability ENUM('Yes', 'No'),
    disability_details TEXT,
    physical_disabilities TEXT,
    mobility_impairments TEXT,
    disability_registration_number VARCHAR(100),
    disability_registration_date DATE,
    id_copy BLOB,
    kra_pin_copy BLOB,
    secondary_school_certificate BLOB,
    kcse_certificate BLOB,
    professional_certificate BLOB,
    diploma_copy BLOB,
    high_diploma_copy BLOB,
    degree_copy BLOB,
    master_degree_copy BLOB,
    phd_copy BLOB,
    birth_certificate_copy BLOB,
    application_date DATE
);

-- Insert a sample record
INSERT INTO JobApplications (
    vacancy_post, vacancy_no, first_name, middle_name, surname, title, date_of_birth, id_no, pin_no, gender, nationality, ethnicity, ethnicity_sub_group, home_county, sub_county, postal_address, postal_code, town_city, telephone_no, mobile_no, email_address, alt_contact_name, alt_contact_telephone, living_with_disability, disability_details, physical_disabilities, mobility_impairments, disability_registration_number, disability_registration_date, id_copy, kra_pin_copy, secondary_school_certificate, kcse_certificate, professional_certificate, diploma_copy, high_diploma_copy, degree_copy, master_degree_copy, phd_copy, birth_certificate_copy, application_date
) VALUES (
    'Software Developer', '123', 'John', 'A.', 'Doe', 'Mr.', '1985-07-10', '12345678', 'A1234567B', 'Male', 'Kenyan', 'Kikuyu', 'Sub-group', 'Nairobi', 'Westlands', 'P.O. Box 1234', '00100', 'Nairobi', '0123456789', '0712345678', 'john.doe@example.com', 'Jane Doe', '0712345679', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10'
);

-- Select all records to verify insertion
SELECT * FROM JobApplications;
