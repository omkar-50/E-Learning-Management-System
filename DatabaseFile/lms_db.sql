-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Omkar Magdum', 'omkar@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(1, 'Introduction to Python', 'This course serves as an introduction to the Python programming language, covering fundamental concepts and practical applications.', 'Guido Van Rossum', '../images/courses/python.jpeg', '2 months', 999, 2000),
(2, 'Java Programming', 'This course provides a comprehensive introduction to the Java programming language, covering essential concepts, syntax, and application development', 'James Gosling', '../images/courses/java.jpeg', '3 months', 2000, 3000),
(3, 'Data Structure and Algorithms', 'In this course students will learn the principles of organization and manipulating data efficiently to solve computational problems. ', 'Robert Lafore', '../images/courses/DSA.jpeg', '1.5 month', 699, 1000),
(4, 'C Programming', 'This course provides introduction to the C language, covering fundamental concepts, syntax, and techniques for writing efficient and robust programs.', 'Dennis Ritchie', '../images/courses/C.jpeg', '2 months', 599, 1000),
(5, 'Introduction to C++', 'This course offers techniques for developing efficient and object-oriented programs. All OOP topics are covered in this course. ', 'Bjarne Stroustrup', '../images/courses/Cpp.jpeg', '2.5 months', 1000, 1500),
(6, 'HTML and CSS', 'This course provides introduction to HTML and CSS. By the end of course, students will be equipped with knowledge and skills to create structured web pages.', 'Tim Berners-Lee', '../images/courses/html_css.jpeg', '1 month', 400, 700),
(7, 'Mastering React', 'This course take you from beginner to advanced level in React development.You will learn how build reusable and maintainable UI components that respond dynamically to user interactions.', 'Jordan Walke', '../images/courses/react.jpeg', '3 months', 2000, 3000),
(8, 'Angular Mastery', 'This course is designed to take you on a journey from a beginner to an advanced level in Angular development, equipping you with the skills and knowledge needed to build sophisticated web applications.\r\n\r\n', 'Misko Hevery', '../images/courses/Angular.jpeg', '3 months', 2000, 3000),
(9, 'Introduction to Javascript', 'This comprehensive course is designed to take you from a beginner to an advanced level in JavaScript programming, covering everything from the basics to advanced topics.', 'Brendan Eich ', '../images/courses/javascript.jpeg', '2 months', 1500, 2000),
(10, 'Mastering PHP', 'This comprehensive course is designed to equip you with the skills and knowledge needed to become proficient in PHP programming, from the fundamentals to advanced web development techniques.', 'Rasmus Lerdorf', '../images/courses/php.jpeg', '2 months', 799, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `co_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`co_id`, `order_id`, `stu_email`, `course_id`, `status`, `amount`, `order_date`) VALUES
(1, 'ORDS37838185', 'amelia@gmail.com', 1, 'Success', 999, '2024-03-19'),
(2, 'ORDS98578858', 'amelia@gmail.com', 4, 'Success', 599, '2024-03-19'),
(3, 'ORDS65734664', 'john@gmail.com', 2, 'Success', 2000, '2024-03-19'),
(4, 'ORDS98523048', 'jack@gmail.com', 7, 'Success', 2000, '2024-03-19'),
(5, 'ORDS65535243', 'jack@gmail.com', 9, 'Success', 1500, '2024-03-19'),
(6, 'ORDS70544370', 'gb@gmail.com', 6, 'Success', 400, '2024-03-20'),
(7, 'ORDS91486379', 'john@gmail.com', 1, 'Success', 999, '2024-04-19'),
(8, 'ORDS43980382', 'siya@gmail.com', 2, 'Success', 2000, '2024-04-19'),
(9, 'ORDS11657826', 'john@gmail.com', 4, 'Success', 599, '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_content`, `stu_id`) VALUES
(1, 'The course content was well-structured and covered all the fundamental concepts of programming. I particularly appreciate the real-word examples and hands-on exercises, which helped solidify my understanding.', 2),
(2, 'I thoroughly enjoyed this course and feel much more confident in my Java programming skills now. I would definitely recommend it to anyone looking to learn programming from scratch.', 1),
(3, 'One of the strengths of the course was the gradual progression from basic to advanced topics, allowing beginners like me to grasp the concepts progressively.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(1, 'Introduction to Python', 'Introduction to Python', '../lessonVideo/Introduction_to_Python_1.mp4', 1, 'Introduction to Python'),
(2, 'Python Installation', 'This video describe all the process how to install Python. ', '../lessonVideo/Python_Installation_2.mp4', 1, 'Introduction to Python'),
(3, 'Getting Started with Python', 'Getting started with Python with writing our first code', '../lessonVideo/Getting_Started_with_Python_3.mp4', 1, 'Introduction to Python'),
(4, 'Variables in Python', 'This video describes how to declare variable in python.', '../lessonVideo/Variables_in_Python_4.mp4', 1, 'Introduction to Python'),
(5, 'List in Python', 'This video introduce to list data type in python.', '../lessonVideo/List_in_Python_5.mp4', 1, 'Introduction to Python'),
(6, 'Java Introduction', 'Introduction to Java programming', '../lessonVideo/Java_Introduction_1.mp4', 2, 'Java Programming'),
(7, 'Java Development Kit (JDK) Setup', 'Introduction to JDK and setup', '../lessonVideo/Java_Development_Kit_JDK_Setup_2.mp4', 2, 'Java Programming'),
(8, 'First Code in Java', 'Writing our first java code.', '../lessonVideo/First_Code_in_Java_3.mp4', 2, 'Java Programming'),
(9, 'How Java Works', 'This video describes how actually java works.', '../lessonVideo/How_Java_Works_4.mp4', 2, 'Java Programming'),
(10, 'Variables in Java', 'How to declare variable in Java.', '../lessonVideo/Variables_in_Java_5.mp4', 2, 'Java Programming'),
(11, 'Introduction to Data Structure', 'Introduction to Data Structure and Algorithms', '../lessonVideo/Introduction_to_Data_Structure_1.mp4', 3, 'Data Structure and Algorithms'),
(12, 'Arrays inInitialization, Declaration', 'This video describes how to initialize and declare array.', '../lessonVideo/Arrays_inInitialization_Declaration_2.mp4', 3, 'Data Structure and Algorithms'),
(13, 'Types of Array', 'Explain different types of arrays', '../lessonVideo/Types_of_Array_3.mp4', 3, 'Data Structure and Algorithms'),
(14, 'Addressing in One Dimensional Array', 'Addressing in One Dimensional Array', '../lessonVideo/Addressing_in_One_Dimensional_Array_4.mp4', 3, 'Data Structure and Algorithms'),
(15, 'Introduction to C programming', 'Getting Started with C Programming ', '../lessonVideo/Getting_Started_with_C_Programming_1.mp4', 4, 'C Programming'),
(16, 'C Variables and Print Output', 'Introduction to variables declaration and print statement in C.', '../lessonVideo/C_Variables_and_Print_Output_2.mp4', 4, 'C Programming'),
(17, 'Data Types in C Programming', 'Explaining different data types in C programming', '../lessonVideo/Data_Types_in_C_Programming_3.mp4', 4, 'C Programming'),
(18, 'Input in C Programming', 'Get User Input in C Programming', '../lessonVideo/Get_User_Input_in_C_Programming_4.mp4', 4, 'C Programming'),
(19, 'Comments in C Programing', 'How to comment one or multiple lines in C programming.', '../lessonVideo/Comments_in_C_Programing_5.mp4', 4, 'C Programming'),
(20, 'Introduction to C++', 'Introduction to C++ Programming', '../lessonVideo/Introduction_to_Cpp_Programming_1.mp4', 5, 'Introduction to C++'),
(21, 'Writing a Simple C++ Program', 'First C++ Program', '../lessonVideo/Writing_a_Simple_Cpp_Program_2.mp4', 5, 'Introduction to C++'),
(22, 'Installing Source Code Editor and Compiler', 'Installing Source Code Editor and Compiler', '../lessonVideo/Installing_Source_Code_Editor_and_Compiler_3.mp4', 5, 'Introduction to C++'),
(23, 'Compiling & Executing C++ Programs (Windows CMD)', 'Compiling & Executing C++ Programs (Windows CMD)', '../lessonVideo/Compiling_&_Executing_Cpp_Programs_Windows_CMD_4.mp4', 5, 'Introduction to C++'),
(24, 'Compiling & Executing C++ Programs (VS Code)', 'Compiling & Executing C++ Programs (VS Code)', '../lessonVideo/Compiling_&_Executing_Cpp_Programs_VSCode_5.mp4', 5, 'Introduction to C++'),
(25, 'Introduction to HTML and CSS', 'Introduction to HTML and CSS', '../lessonVideo/Introduction_to_html_and_css_1.mp4', 6, 'HTML and CSS'),
(26, 'How to create and run HTML file ', 'In this video we will see how to create and run HTML file ', '../lessonVideo/How_to_create_and_run_HTML_file_2.mp4', 6, 'HTML and CSS'),
(27, 'Basic Structure of an HTML', 'In this video we will see basic structure of an HTML', '../lessonVideo/Basic_Structure_of_an_HTML_3.mp4', 6, 'HTML and CSS'),
(28, 'DOCTYPE Declaration In HTML', 'What Is DOCTYPE Declaration In HTML', '../lessonVideo/What_Is_DOCTYPE_Declaration_In_HTML_4.mp4', 6, 'HTML and CSS'),
(29, 'What is Tags, Elements, and Attributes in html', 'Explanation about different Tags, Elements, and Attributes in html', '../lessonVideo/What_is_Tags_Elements_and_Attributes_in_html_5.mp4', 6, 'HTML and CSS'),
(30, 'Introduction to React', 'Introduction to react', '../lessonVideo/Introduction_to_react_1.mp4', 7, 'Mastering React'),
(31, 'Hello World', 'First react program Hello World', '../lessonVideo/Hello_World_react_2.mp4', 7, 'Mastering React'),
(32, 'Folder Structure', 'Folder Structure in react', '../lessonVideo/Folder_Structure_react_3.mp4', 7, 'Mastering React'),
(33, 'Components', 'React components', '../lessonVideo/Components_react_4.mp4', 7, 'Mastering React'),
(34, 'Functional Components', 'Functional Components in React', '../lessonVideo/Functional_Components_react_5.mp4', 7, 'Mastering React'),
(35, 'Introduction to Angular', 'Introduction to Angular', '../lessonVideo/Introduction_to_angular_1.mp4', 8, 'Angular Mastery'),
(36, 'Setup and install', 'Setup and install', '../lessonVideo/Setup_and_install_2.mp4', 8, 'Angular Mastery'),
(37, 'Files and Folder Structure', 'Files and Folder Structure', '../lessonVideo/Files_and_Folder_Structure_3.mp4', 8, 'Angular Mastery'),
(38, 'Hello World_ Make first change', 'First angular program', '../lessonVideo/Hello_World _ Make_first_change_4.mp4', 8, 'Angular Mastery'),
(39, 'what is Interpolation', 'Explanation about what is Interpolation', '../lessonVideo/what_is_Interpolation_5.mp4', 8, 'Angular Mastery'),
(40, 'Introduction to JavaScript + Setup', 'Introduction to JavaScript + Setup', '../lessonVideo/Introduction_to_JavaScript_and_Setup_1.mp4', 9, 'Introduction to Javascript'),
(41, 'Variables in JavaScript ', 'Variable declaration in JavaScript ', '../lessonVideo/Variables_in_JavaScript_2.mp4', 9, 'Introduction to Javascript'),
(42, 'const, let and var in JavaScript ', 'Different methods to declare variable.', '../lessonVideo/const_let_and_var_in_JavaScript_3.mp4', 9, 'Introduction to Javascript'),
(43, 'Introduction to PHP Programming', 'Introduction to PHP Programming', '../lessonVideo/Introduction_to_PHP_Programming_1.mp4', 10, 'Mastering PHP'),
(44, 'How to Install a Local Server for PHP ', 'This video describes how to Install a Local Server for PHP ', '../lessonVideo/How_to_Install_a_Local_Server_for_PHP_2.mp4', 10, 'Mastering PHP'),
(45, 'PHP Variable and Data Type', 'Explaining variables and different data types in PHP.', '../lessonVideo/PHP_Variable_and_Data_Type_3.mp4', 10, 'Mastering PHP'),
(46, 'Built-In Superglobal Variables in PHP', 'Built-In Superglobal Variables in PHP', '../lessonVideo/Built_In_Superglobal_Variables_in_PHP_4.mp4', 10, 'Mastering PHP'),
(47, 'PHP Variable and Data Type', 'Explaining variables and different data types in PHP.', '../lessonVideo/PHP_Variable_and_Data_Type_3.mp4', 10, 'Mastering PHP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(10) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'John', 'john@gmail.com', 'john', 'Web Developer', '../images/students/John.jpg'),
(2, 'Amelia', 'amelia@gmail.com', 'amelia', 'Software Engineer', '../images/students/Amelia.jpg'),
(3, 'jack', 'jack@gmail.com', 'jack', 'Database Administrator', '../images/students/Jack.jpg'),
(4, 'Gourav Bhivasekar', 'gb@gmail.com', '1234', 'Student', '../images/students/IMG_20240129_220634.jpg'),
(5, 'omkar', 'omkar@gmail.com', '111', '', ''),
(6, 'Ashish', 'ashish@gmail.com', 'ashish', '', ''),
(7, 'Aditya', 'adi@gmail.com', 'adi', '', ''),
(8, 'sahil', 'sahil@gmail.com', 'sahil', '', ''),
(9, 'SIYA JADHAV', 'siya@gmail.com', '12345', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
