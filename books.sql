-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 02:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `ISBN-10` bigint(20) NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Author` text COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(11) NOT NULL,
  `Pages` int(11) NOT NULL,
  `Language` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `FileSize` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `FileFormat` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BookDescription` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`ISBN-10`, `Image`, `Name`, `Author`, `Year`, `Pages`, `Language`, `FileSize`, `FileFormat`, `Category`, `BookDescription`) VALUES
(71824553, 'Oracle-SOA-Suite-12c-Handbook.jpg', 'Oracle SOA Suite 12c Handbook', 'Lucas Jellema', 2015, 912, 'English', '42.7 MB', 'PDF', ' Oracle', 'Master Oracle SOA Suite 12c\r\n\r\nDesign, implement, manage, and maintain a highly flexible service-oriented computing infrastructure across your enterprise using the detailed information in this Oracle Press guide. Written by an Oracle ACE director, Oracle SOA Suite 12c Handbook uses a start-to-finish case study to illustrate each concept and technique. Learn expert techniques for designing and implementing components, assembling composite applications, integrating Java, handling complex business logic, and maximizing code reuse. Runtime administration, governance, and security are covered in this practical resource.\r\n\r\nGet started with the Oracle SOA Suite 12c development and run time environment\r\nDeploy and manage SOA composite applications\r\nExpose SOAP/XML REST/JSON through Oracle Service Bus\r\nEstablish interactions through adapters for Database, JMS, File/FTP, UMS, LDAP, and Coherence\r\nEmbed custom logic using Java and the Spring component\r\nPerform fast data analysis in real time with Oracle Event Processor\r\nImplement Event Drive Architecture based on the Event Delivery Network (EDN)\r\nUse Oracle Business Rules to encapsulate logic and automate decisions\r\nModel complex processes using BPEL, BPMN, and human task components\r\nEstablish KPIs and evaluate performance using Oracle Business Activity Monitoring\r\nControl traffic, audit system activity, and encrypt sensitive data'),
(71837264, 'Data-Visualization-for-Oracle-Business-Intelligence-11g-400x495.jpg', 'Data Visualization for Oracle Business Intelligence 11g', 'Dan Vlamis, Tim Vlamis', 2015, 352, 'English', '25.4 MB', 'PDF', 'Oracle', 'Design and Deliver Effective Visual Solutions of BI Data\r\n\r\nCowritten by an Oracle ACE Director and an expert in data visualization design specializing in BI and analytics, Data Visualization for Oracle Business Intelligence 11g reveals best practices for presenting data-driven insights with graphs, tables, maps, dashboards, and other methods that will immediately enhance corporate decision-making. Throughout the book, the principles of effective design are emphasized. Leverage the power of this comprehensive business intelligence platform to deliver rich visualizations of business information across the enterprise.\r\n\r\nCreate well-organized tables and pivot tables\r\nConvey data insights with line, bar, pie, waterfall, radar, and other graphs\r\nConfigure MapViews so that you can provide interactive maps and spatial analysis capabilities\r\nBuild advanced visualizations, including trellis charts, gauges, R images, jQuery sparklines, and more\r\nUse Oracle Business Intelligence Publisher to create pixel-perfect reports from various data sources\r\nDesign effective, interactive BI dashboards\r\nUse the Oracle Scorecard and Strategy Management module to measure, evaluate, and manage key performance indicators\r\nMake smart color choices using data science tools'),
(71843655, 'Web-Scalability-for-Startup-Engineers-400x495.jpg', 'Web Scalability for Startup Engineers', 'Artur Ejsmont', 2015, 416, 'English', '15.7 MB', 'PDF', ' Services & APIs', 'Design and build scalable web applications quickly\r\n\r\nThis is an invaluable roadmap for meeting the rapid demand to deliver scalable applications in a startup environment. With a focus on core concepts and best practices rather than on individual languages, platforms, or technologies, Web Scalability for Startup Engineers describes how infrastructure and software architecture work together to support a scalable environment.\r\n\r\nYou’ll learn, step by step, how scalable systems work and how to solve common challenges. Helpful diagrams are included throughout, and real-world examples illustrate the concepts presented. Even if you have limited time and resources, you can successfully develop and deliver robust, scalable web applications with help from this practical guide.\r\n\r\nLearn the key principles of good software design required for scalable systems\r\nBuild the front-end layer to sustain the highest levels of concurrency and request rates\r\nDesign and develop web services, including REST-ful APIs\r\nEnable a horizontally scalable data layer\r\nImplement caching best practices\r\nLeverage asynchronous processing, messaging, and event-driven architecture\r\nStructure, index, and store data for optimized search\r\nExplore other aspects of scalability, such as automation, project management, and agile teams'),
(1430263881, 'Pro-jQuery-2.0-2nd-Edition-400x487.jpg', 'Pro jQuery 2.0, 2nd Edition', 'Adam Freeman', 2014, 1044, 'English', '41.1 MB', 'PDF', ' JavaScript', 'jQuery 2.0 is the latest version of the jQuery framework. Suitable for modern web browsers it provides a robust API for web application development. It is fast becoming the tool of choice for web developers the world over and sets the standard for simplicity,flexibility and extensibility in website design.\r\n\r\nIn Pro jQuery 2.0 seasoned author, Adam Freeman, demonstrates how to get the most from jQuery 2.0 by focussing on the practical features of the technology and how they can be applied to solving real-world problems. In this comprehensive reference he goes in depth to give you the practical knowledge that you need.\r\n\r\nEach topic is covered clearly and concisely, and is packed with the details you’ll need to learn to be truly effective. The most important features are given a no-nonsense, in-depth treatment, and chapters contain examples that demonstrate both the power and the subtlety of jQuery.'),
(1617293024, 'Type-driven-Development-with-Idris.jpg', 'Type-driven Development with Idris', 'Edwin Brady', 2017, 480, 'English', '10.7 MB', 'PDF', 'Testing&Engineering', 'Type-Driven Development with Idris, written by the creator of Idris, teaches you how to improve the performance and accuracy of your programs by taking advantage of a state-of-the-art type system. This book teaches you with Idris, a language designed to support type-driven development.'),
(1783281553, 'Monitoring-Hadoop-400x493.jpg', 'Monitoring Hadoop', 'Gurmukh Singh', 2015, 112, 'English', '1.3 MB', 'PDF', 'Data Processing', 'With the exponential growth of data and many enterprises crunching more and more data, Hadoop as a data platform has gained a lot of popularity. The Hadoop platform needs to be monitored with respect to how it works and functions. There is an ever-increasing need to keep the Hadoop platform clean and healthy.\r\n\r\nThis book will help you to integrate Hadoop and Nagios in a seamless and easy way. At the start, the book covers the basics of operating system logging and monitoring. Getting to grips with the characteristics of Hadoop monitoring, metrics, and log collection will help Hadoop users, especially Hadoop administrators, diagnose and troubleshoot clusters better. In essence, the book teaches you how to set up an all-inclusive and robust monitoring system for the Hadoop platform. The book also serves as a quick reference to the various metrics available in Hadoop.\r\n\r\nConcluding with the visualization of Hadoop metrics, you will get acquainted with the workings of Hadoop in a short span of time with the help of step-by-step instructions in each chapter.\r\n\r\nWhat You Will Learn\r\n\r\nInstall Nagios and Ganglia and understand logging at the operating system level\r\nCreate and configure Nagios nodes for monitoring with custom checks\r\nMonitor Hadoop daemons such as NameNode, DataNode, JobTracker, and so on\r\nConfigure logs for various daemons and set up audits for the options done on the cluster\r\nTrack important parameters for the File System, MapReduce, and other counters\r\nSet up Nagios master and client nodes with checks for the system and applications running on it\r\nConfigure the Hadoop metrics collection and visualize it for nontechnical users\r\nUnderstand the communication between different daemons and protocols and the ports they use'),
(1785887068, 'Magento-2-Cookbook-400x493.jpg', 'Magento 2 Cookbook', 'Ray Bogman, Vladimir Kerkhoff', 2016, 342, 'English', '6.5 MB', 'PDF', 'Software', 'Magento 2 is an open source e-commerce platform that has all the functionality to function from small to large online stores. It is preferred by developers and merchants due to its new architecture, which makes it possible to extend the functionalities with plugins, a lot of which are now created by the community.\r\n\r\nThis merchant and developer guide is packed with recipes that cover all aspects of Magento 2. The recipes start with simple how-to’s then delve into more advanced topics as the book progresses.\r\n\r\nWe start with the basics of setting up a Magento 2 project on Apache or Nginx. Next, you will learn about basics including system tools and caching to get your Magento 2 system ready for the real work. We move on to simple tasks such as managing your store and catalog configuration. When you are familiar with this, we cover more complex features such as module and extension development. Then we will jump to the final part: advanced Magento 2 extensions.\r\n\r\nBy the end of this book, you’ll be competent with all the development phases of Magento 2 and its most common elements.\r\n\r\nWhat You Will Learn\r\n\r\nSet up a Magento 2 project on Apache or Nginx.\r\nTransfer your Magento 1 database to Magento 2 using the Magento 2 system tools.\r\nBoost the performance of Magento 2 by enabling different types of caching.\r\nBuild a Magento 2 multi-store by creating a root catalog, subdirectories, and products.\r\nCreate and manage pages, blocks, and front-end apps.\r\nManage your Magento store by setting up the correct TAX rules.\r\nDesign custom themes within the Magento 2 framework.\r\nCreate basic and advanced extensions using Magento 2.'),
(1785889745, 'Mastering-Clojure.jpg', 'Mastering Clojure', 'Akhil Wali', 2016, 266, 'English', '2.4 MB', 'PDF', 'Programming', 'Clojure is a general-purpose language from the Lisp family with an emphasis on functional programming. It has some interesting concepts and features such as immutability, gradual typing, thread-safe concurrency primitives, and macro-based metaprogramming, which makes it a great choice to create modern, performant, and scalable applications.\r\n\r\nMastering Clojure gives you an insight into the nitty-gritty details and more advanced features of the Clojure programming language to create more scalable, maintainable, and elegant applications. You’ll start off by learning the details of sequences, concurrency primitives, and macros. Packed with a lot of examples, you’ll get a walkthrough on orchestrating concurrency and parallelism, which will help you understand Clojure reducers, and we’ll walk through composing transducers so you know about functional composition and process transformation inside out. We also explain how reducers and transducers can be used to handle data in a more performant manner.\r\n\r\nLater on, we describe how Clojure also supports other programming paradigms such as pure functional programming and logic programming. Furthermore, you’ll level up your skills by taking advantage of Clojure’s powerful macro system. Parallel, asynchronous, and reactive programming techniques are also described in detail.\r\n\r\nLastly, we’ll show you how to test and troubleshoot your code to speed up your development cycles and allow you to deploy the code faster.\r\n\r\nWhat you will learn\r\n\r\nMaximize the impact of parallelization, functional composition, and process transformation by composing reducers and transducers\r\nProcess and manipulate data using sequences, reducers, and transducers in Clojure\r\nModify and add features to the Clojure language using macros\r\nExplore the features of category theory and custom data sources for logic programming in Clojure\r\nOrchestrate parallelism and concurrency using built-in primitives as well as community libraries in Clojure\r\nHandle data with asynchronous and reactive programming methodologies and leverage it using the core.async library\r\nTest your code with unit tests, specs, and type checks to write testable code\r\nTroubleshoot and style your Clojure code to make it more maintainable');

-- --------------------------------------------------------

--
-- Table structure for table `listbooks`
--

CREATE TABLE `listbooks` (
  `ISBN-10` bigint(20) NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Author` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listbooks`
--

INSERT INTO `listbooks` (`ISBN-10`, `Image`, `Name`, `Author`, `Description`) VALUES
(1617293024, 'Type-driven-Development-with-Idris.jpg', 'Type-driven Development with Idris', 'Edwin Brady', 'Type-Driven Development with Idris, written by the creator of Idris, teaches you how to improve the performance and accuracy of your programs by taking advantage of a state-of-the-art type system. This book teaches you with Idris, a language designed to support type-driven development.'),
(71843655, 'Web-Scalability-for-Startup-Engineers-400x495.jpg', 'Web Scalability for Startup Engineers', 'Artur Ejsmont', 'Design and build scalable web applications quickly This is an invaluable roadmap for meeting the rapid demand to deliver scalable applications in a startup environment. With a focus on core concepts and best practices rather than on individual languages, platforms, or technologies, Web Scalability for Startup Engineers describes…'),
(71824553, 'Oracle-SOA-Suite-12c-Handbook.jpg', 'Oracle SOA Suite 12c Handbook', 'Lucas Jellema', 'Master Oracle SOA Suite 12c Design, implement, manage, and maintain a highly flexible service-oriented computing infrastructure across your enterprise using the detailed information in this Oracle Press guide. Written by an Oracle ACE director, Oracle SOA Suite 12c Handbook uses a start-to-finish case study to illustrate each conceptï¿½'),
(71837264, 'Data-Visualization-for-Oracle-Business-Intelligence-11g-400x495.jpg', 'Data Visualization for Oracle Business Intelligence 11g', 'Dan Vlamis, Tim Vlamis', 'Design and Deliver Effective Visual Solutions of BI Data Cowritten by an Oracle ACE Director and an expert in data visualization design specializing in BI and analytics, Data Visualization for Oracle Business Intelligence 11g reveals best practices for presenting data-driven insights with graphs, tables, maps, dashboards, and other…'),
(1430263881, 'Pro-jQuery-2.0-2nd-Edition-400x487.jpg', 'Pro jQuery 2.0, 2nd Edition', 'Adam Freeman', 'jQuery 2.0 is the latest version of the jQuery framework. Suitable for modern web browsers it provides a robust API for web application development. It is fast becoming the tool of choice for web developers the world over and sets the standard for simplicity,flexibility and extensibility in website…'),
(1785889745, 'Mastering-Clojure.jpg', 'Mastering Clojure', 'Akhil Wali', 'Clojure is a general-purpose language from the Lisp family with an emphasis on functional programming. It has some interesting concepts and features such as immutability, gradual typing, thread-safe concurrency primitives, and macro-based metaprogramming, which makes it a great choice to create modern, performant, and scalable applications. Mastering Clojure…'),
(1785887068, 'Magento-2-Cookbook-400x493.jpg', 'Magento 2 Cookbook', 'Ray Bogman, Vladimir Kerkhoff', 'Magento 2 is an open source e-commerce platform that has all the functionality to function from small to large online stores. It is preferred by developers and merchants due to its new architecture, which makes it possible to extend the functionalities with plugins, a lot of which are…'),
(1783281553, 'Monitoring-Hadoop-400x493.jpg', 'Monitoring Hadoop', 'Gurmukh Singh', 'With the exponential growth of data and many enterprises crunching more and more data, Hadoop as a data platform has gained a lot of popularity. The Hadoop platform needs to be monitored with respect to how it works and functions. There is an ever-increasing need to keep the…');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Name`, `Password`) VALUES
(1, 'Fine', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`ISBN-10`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
