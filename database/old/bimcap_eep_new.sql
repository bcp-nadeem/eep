-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 01:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimcap_eep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_date` varchar(200) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`, `admin_date`, `admin_status`) VALUES
(1, 'admin', 'admin', '24/1/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_date` varchar(200) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_date`, `department_status`) VALUES
(2, 'Account Management ', '25-01-2023 14:07:11', 1),
(4, 'IT', '06-02-2023 07:36:04', 1),
(5, 'BIM Management', '06-02-2023 12:48:16', 1),
(6, 'R&D', '06-02-2023 12:48:23', 1),
(7, 'Human Resources', '06-02-2023 12:48:35', 1),
(8, 'BIMCAP Manila', '06-02-2023 12:48:46', 1),
(9, 'BIMCAP Hong Kong', '06-02-2023 12:48:55', 1),
(10, 'TEST D', '07-02-2023 08:47:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(200) NOT NULL,
  `f_department_id` int(11) NOT NULL,
  `designation_date` varchar(200) NOT NULL,
  `designation_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `f_department_id`, `designation_date`, `designation_status`) VALUES
(2, 'Front End Developer', 1, '25-01-2023 14:19:22', 1),
(4, 'Account Manager', 2, '03-02-2023 11:31:02', 1),
(5, 'Web Developer', 4, '06-02-2023 07:36:19', 1),
(6, 'Director', 5, '06-02-2023 12:49:42', 1),
(7, 'BIM Manager', 5, '06-02-2023 12:49:50', 1),
(8, 'BIM Coordinator', 5, '06-02-2023 12:50:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `emp_performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `emp_performance_start_date` varchar(200) NOT NULL,
  `emp_performance_end_date` varchar(200) NOT NULL,
  `main_emp_avg` float NOT NULL,
  `performance_post_date` varchar(200) NOT NULL,
  `employee_performance_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_performance`
--

INSERT INTO `employee_performance` (`emp_performance_id`, `employee_id`, `emp_performance_start_date`, `emp_performance_end_date`, `main_emp_avg`, `performance_post_date`, `employee_performance_status`) VALUES
(1, 14, '2023-01-16', '2023-02-09', 3.93, '09-02-2023 08:34:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `main_employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(200) NOT NULL,
  `employee_last_name` varchar(200) NOT NULL,
  `employee_email` varchar(200) NOT NULL,
  `employee_number` varchar(200) NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_city` varchar(200) NOT NULL,
  `employee_country` varchar(200) NOT NULL,
  `employee_department` varchar(200) NOT NULL,
  `employee_designation` varchar(200) NOT NULL,
  `employee_image` varchar(200) NOT NULL,
  `employee_doj` varchar(200) NOT NULL,
  `employee_dot` varchar(200) NOT NULL,
  `employee_status` int(11) NOT NULL,
  `emp_post_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`main_employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_number`, `employee_address`, `employee_city`, `employee_country`, `employee_department`, `employee_designation`, `employee_image`, `employee_doj`, `employee_dot`, `employee_status`, `emp_post_date`) VALUES
(11, 'Avinash', 'Singhal', 'avinash.singhal@bimcap.com', '01234 567890', '206, Sai Yeung Choi Street South ', 'Durg', 'gb', '2', 'Account Manager', 'upload/2023/feb/03/heheman.jpg', '2021-12-01', '', 1, '03-02-2023 10:22:50'),
(12, 'Albert Flores', 'Flores', 'albertflores@gmail.com', '+852 1236547896', '206, Sai Yeung Choi Street South ', 'Mong Kok', 'hk', '4', 'Web Developer', 'upload/2023/feb/03/user-1-ad58ce72.jpg', '2022-12-01', '', 1, '03-02-2023 11:35:03'),
(13, 'Belle Ferguson', 'Ferguson', 'belleferguson@gmail.com', '1236547892', '206, Sai Yeung Choi Street South ', 'Mong Kok', 'jp', '2', 'Account Manager', 'upload/2023/feb/03/balle.png', '2023-01-13', '', 1, '03-02-2023 11:52:34'),
(14, 'Nadeem', 'Babu', 'nadeem@bimcap.com', '088177 77405', 'Luchki para durg 491001', 'Durg', 'in', '4', 'Web Developer', 'upload/2023/feb/09/nadeemq.jpg', '2023-01-16', '', 1, '06-02-2023 07:37:14'),
(16, 'Kevin', 'Cheng', 'k@abc.com', '+1 56785', 'ABC', 'ABC', 'us', '5', 'Director', 'upload/2023/feb/07/nadeemq.jfif', '2023-02-02', '', 1, '07-02-2023 08:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `p_adaptability_table`
--

CREATE TABLE `p_adaptability_table` (
  `p_adaptability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `adaptability_short_amount_of_time` int(11) DEFAULT NULL,
  `adaptability_ability_to_adjust_depending` int(11) DEFAULT NULL,
  `adaptability_work_on_multiple_projects` int(11) DEFAULT NULL,
  `adaptability_learn_new_disciplines_software` int(11) DEFAULT NULL,
  `p_adaptability_emp_avg` float DEFAULT NULL,
  `adaptability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_adaptability_table`
--

INSERT INTO `p_adaptability_table` (`p_adaptability_id`, `employee_id`, `adaptability_short_amount_of_time`, `adaptability_ability_to_adjust_depending`, `adaptability_work_on_multiple_projects`, `adaptability_learn_new_disciplines_software`, `p_adaptability_emp_avg`, `adaptability_comments`) VALUES
(1, 14, 4, 5, 3, 2, 4.67, 'test'),
(2, 14, 4, 5, 3, 2, 4.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_communication_table`
--

CREATE TABLE `p_communication_table` (
  `p_communication_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `communication_proactively_asking` int(11) DEFAULT NULL,
  `communication_responds_to_messages` int(11) DEFAULT NULL,
  `communication_proactively_informing` int(11) DEFAULT NULL,
  `communication_level_of_english` int(11) DEFAULT NULL,
  `communication_team_client` int(11) DEFAULT NULL,
  `communication_Informs_the_supervisor` int(11) DEFAULT NULL,
  `communication_comments` text DEFAULT NULL,
  `communication_emp_avg` float DEFAULT NULL,
  `p_communication_post_date` varchar(200) NOT NULL,
  `p_communication_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_communication_table`
--

INSERT INTO `p_communication_table` (`p_communication_id`, `employee_id`, `communication_proactively_asking`, `communication_responds_to_messages`, `communication_proactively_informing`, `communication_level_of_english`, `communication_team_client`, `communication_Informs_the_supervisor`, `communication_comments`, `communication_emp_avg`, `p_communication_post_date`, `p_communication_status`) VALUES
(1, 14, 4, 4, 3, 4, 3, 4, 'test', 3.67, '09-02-2023 08:34:15', 1),
(2, 14, 4, 4, 3, 4, 3, 4, 'test', 3.67, '09-02-2023 08:34:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_creativity_problem_solving_table`
--

CREATE TABLE `p_creativity_problem_solving_table` (
  `p_creativity_problem_solving_table` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `creativity_problem_solving_learn_new_project` int(11) DEFAULT NULL,
  `creativity_problem_solving_depending_project_needs` int(11) DEFAULT NULL,
  `creativity_problem_solving_work_multiple_projects` int(11) DEFAULT NULL,
  `creativity_problem_solving_knowledge_to_new_challenges` int(11) DEFAULT NULL,
  `p_creativity_problem_solving_emp_avg` float DEFAULT NULL,
  `creativity_problem_solving_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_creativity_problem_solving_table`
--

INSERT INTO `p_creativity_problem_solving_table` (`p_creativity_problem_solving_table`, `employee_id`, `creativity_problem_solving_learn_new_project`, `creativity_problem_solving_depending_project_needs`, `creativity_problem_solving_work_multiple_projects`, `creativity_problem_solving_knowledge_to_new_challenges`, `p_creativity_problem_solving_emp_avg`, `creativity_problem_solving_comments`) VALUES
(1, 14, 3, 4, 3, 4, 4.67, 'test'),
(2, 14, 3, 4, 3, 4, 4.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_dependability_table`
--

CREATE TABLE `p_dependability_table` (
  `p_dependability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `dependability_handle_a_team` int(11) DEFAULT NULL,
  `dependability_handle_a_project` int(11) DEFAULT NULL,
  `dependability_the_set_deadlines` int(11) DEFAULT NULL,
  `dependability_emp_avg` float DEFAULT NULL,
  `dependability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_dependability_table`
--

INSERT INTO `p_dependability_table` (`p_dependability_id`, `employee_id`, `dependability_handle_a_team`, `dependability_handle_a_project`, `dependability_the_set_deadlines`, `dependability_emp_avg`, `dependability_comments`) VALUES
(1, 14, 5, 4, 5, 4.67, 'test'),
(2, 14, 5, 4, 5, 4.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_initiative_proactive_table`
--

CREATE TABLE `p_initiative_proactive_table` (
  `p_initiative_proactive_id` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `initiative_proactive_ability_to_learn_new_project` int(11) DEFAULT NULL,
  `initiative_proactive_adjust_depending_on_the_project` int(11) DEFAULT NULL,
  `initiative_proactive_work_on_multiple_projects` int(11) DEFAULT NULL,
  `initiative_proactive_learn_new_disciplines_software` int(11) DEFAULT NULL,
  `p_initiative_proactive_emp_avg` float DEFAULT NULL,
  `initiative_proactive_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_initiative_proactive_table`
--

INSERT INTO `p_initiative_proactive_table` (`p_initiative_proactive_id`, `employee_id`, `initiative_proactive_ability_to_learn_new_project`, `initiative_proactive_adjust_depending_on_the_project`, `initiative_proactive_work_on_multiple_projects`, `initiative_proactive_learn_new_disciplines_software`, `p_initiative_proactive_emp_avg`, `initiative_proactive_comments`) VALUES
(NULL, 14, 3, 4, 3, 4, 4.67, 'test'),
(NULL, 14, 3, 4, 3, 4, 4.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_knowledge_table`
--

CREATE TABLE `p_knowledge_table` (
  `p_knowledge_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `knowledge_standards_and_portfolio` int(11) DEFAULT NULL,
  `knowledge_bim_project_requirements` int(11) DEFAULT NULL,
  `knowledge_of_the_construction_industry` int(11) DEFAULT NULL,
  `knowledge_emp_avg` float DEFAULT NULL,
  `knowledge_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_knowledge_table`
--

INSERT INTO `p_knowledge_table` (`p_knowledge_id`, `employee_id`, `knowledge_standards_and_portfolio`, `knowledge_bim_project_requirements`, `knowledge_of_the_construction_industry`, `knowledge_emp_avg`, `knowledge_comments`) VALUES
(1, 14, 3, 4, 4, 3.67, 'test'),
(2, 14, 3, 4, 4, 3.67, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_productivity_table`
--

CREATE TABLE `p_productivity_table` (
  `productivity_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `productivity_speed_of_modelling` int(11) DEFAULT NULL,
  `productivity_absence_or_minimum` int(11) DEFAULT NULL,
  `productivity_timelines_and_deadlines` int(11) DEFAULT NULL,
  `productivity_emp_avg` float DEFAULT NULL,
  `productivity_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_productivity_table`
--

INSERT INTO `p_productivity_table` (`productivity_id`, `employee_id`, `productivity_speed_of_modelling`, `productivity_absence_or_minimum`, `productivity_timelines_and_deadlines`, `productivity_emp_avg`, `productivity_comments`) VALUES
(1, 14, 2, 4, 4, 3.33, 'test'),
(2, 14, 2, 4, 4, 3.33, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_quality_table`
--

CREATE TABLE `p_quality_table` (
  `p_quality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `quality_attention_to_details` int(11) DEFAULT NULL,
  `quality_mistakes_requiring_correction` int(11) DEFAULT NULL,
  `quality_meets_the_expectations` int(11) DEFAULT NULL,
  `quality_conducts_qa_qc` int(11) DEFAULT NULL,
  `quality_follows_the_correct_workflow_set` int(11) DEFAULT NULL,
  `quality_emp_avg` float DEFAULT NULL,
  `quality_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_quality_table`
--

INSERT INTO `p_quality_table` (`p_quality_id`, `employee_id`, `quality_attention_to_details`, `quality_mistakes_requiring_correction`, `quality_meets_the_expectations`, `quality_conducts_qa_qc`, `quality_follows_the_correct_workflow_set`, `quality_emp_avg`, `quality_comments`) VALUES
(1, 14, 5, 4, 5, 4, 5, 3.33, 'test'),
(2, 14, 5, 4, 5, 4, 5, 3.33, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_software_table`
--

CREATE TABLE `p_software_table` (
  `p_software_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `software_bitrix_tasks_and_leaves` int(11) DEFAULT NULL,
  `software_digital_tools_production_communication` int(11) DEFAULT NULL,
  `software_emp_avg` float DEFAULT NULL,
  `software_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_software_table`
--

INSERT INTO `p_software_table` (`p_software_id`, `employee_id`, `software_bitrix_tasks_and_leaves`, `software_digital_tools_production_communication`, `software_emp_avg`, `software_comments`) VALUES
(1, 14, 3, 4, 2.33, 'test'),
(2, 14, 3, 4, 2.33, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_time_management_table`
--

CREATE TABLE `p_time_management_table` (
  `p_time_management_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `time_management_scheduled_work_shift` int(11) DEFAULT NULL,
  `time_management_required_working_hours` int(11) DEFAULT NULL,
  `time_management_deadlinesclearly_with_your_teammates` int(11) DEFAULT NULL,
  `time_management_emp_avg` float DEFAULT NULL,
  `time_management_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_time_management_table`
--

INSERT INTO `p_time_management_table` (`p_time_management_id`, `employee_id`, `time_management_scheduled_work_shift`, `time_management_required_working_hours`, `time_management_deadlinesclearly_with_your_teammates`, `time_management_emp_avg`, `time_management_comments`) VALUES
(1, 14, 4, 5, 4, 4.33, 'test'),
(2, 14, 4, 5, 4, 4.33, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`emp_performance_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`main_employee_id`);

--
-- Indexes for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  ADD PRIMARY KEY (`p_adaptability_id`);

--
-- Indexes for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  ADD PRIMARY KEY (`p_communication_id`);

--
-- Indexes for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  ADD PRIMARY KEY (`p_creativity_problem_solving_table`);

--
-- Indexes for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  ADD PRIMARY KEY (`p_dependability_id`);

--
-- Indexes for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  ADD PRIMARY KEY (`p_knowledge_id`);

--
-- Indexes for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  ADD PRIMARY KEY (`productivity_id`);

--
-- Indexes for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  ADD PRIMARY KEY (`p_quality_id`);

--
-- Indexes for table `p_software_table`
--
ALTER TABLE `p_software_table`
  ADD PRIMARY KEY (`p_software_id`);

--
-- Indexes for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  ADD PRIMARY KEY (`p_time_management_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `emp_performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `main_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  MODIFY `p_adaptability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  MODIFY `p_communication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  MODIFY `p_creativity_problem_solving_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  MODIFY `p_dependability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  MODIFY `p_knowledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  MODIFY `productivity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  MODIFY `p_quality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_software_table`
--
ALTER TABLE `p_software_table`
  MODIFY `p_software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  MODIFY `p_time_management_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
