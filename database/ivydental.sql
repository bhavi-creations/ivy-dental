-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2025 at 05:19 AM
-- Server version: 10.6.22-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivydental`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `main_content` text NOT NULL,
  `full_content` text NOT NULL,
  `title_image` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `main_content`, `full_content`, `title_image`, `main_image`, `video`, `service`, `created_at`) VALUES
(52, 'Straighten Your Smile with Confidence: Invisalign at Ivory Dental, Vidyaranyapura,', '<p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Wish your teeth could align without visible braces? At Ivory Dental, the best dental clinic in </span><span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">, Invisalign clear aligners offer a subtle, comfortable path to a perfect smile.</span></p><p><br></p>', '<p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Why Patients Love Invisalign Here</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Invisible design: Align teeth without drawing attention.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Custom 3D-planned treatment: Every step is digitally mapped for accuracy.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Comfort &amp; convenience: Removable, irritation-free trays compared to braces.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Treatment Journey</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Initial 3D Scan – Preview your smile transformation virtually.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Receive Clear Aligners – Customized trays gently shift teeth.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Progress Check-ups – Regular visits track and adjust progress.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Finish &amp; Retain – Retainers ensure long-term results.</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Conclusion</span></p><p><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">Looking for Invisalign treatment in Bengaluru? Visit Ivory Dental, </span><span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span><span style=\"background-color: rgb(30, 30, 30); color: rgb(212, 212, 212);\">, where expert orthodontists provide clear, modern solutions for a confident&nbsp;smile.</span></p>', '', '68a69f2b005fb_1755750187.png', '68a69f2b00870_1755750187.mp4', 'Clear Aligners', '2025-08-19 05:45:48'),
(53, 'Rediscover Your Smile: Advanced Dental Implants at Ivory Dental, Vidyaranyapura,', '<p>Missing teeth can hinder eating, speaking, and your confidence. At Ivory Dental, one of the best dental hospitals in <span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span>, Bengaluru, our implantology team restores both function and beauty with precision and care.</p><p><br></p>', '<p>Why Choose Ivory Dental for Implants</p><p>Skilled Specialists: Experienced prosthodontists and implantologists for reliable results.</p><p>Global-quality materials: Durable, high-standard implants.</p><p>Tailored care: Options for single, multiple, or full-mouth implants.</p><p>Procedure Overview</p><p>Consultation &amp; Scanning – A detailed evaluation to plan your treatment.</p><p>Implant Placement – Titanium posts placed securely in the jawbone.</p><p>Healing &amp; Integration – The implant bonds naturally with the bone.</p><p>Restoration – A custom crown completes the smile.</p><p>Care &amp; Support – Post-care guidance ensures long-lasting results.</p><p>Conclusion</p><p>Whether you’re missing one tooth or many, Ivory Dental in <span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span>offers world-class implant solutions for a confident and&nbsp;lasting&nbsp;smile</p>', '', '68a69ee0b5599_1755750112.png', '68a69ee0b582e_1755750112.mp4', 'Dental Implants', '2025-08-19 05:56:40'),
(55, 'Say Goodbye to Dental Pain: Root Canal Treatment at Ivory Dental, Vidyaranyapura,', '<p>A painful tooth doesn’t just affect your smile—it affects your life. At Ivory Dental, the best dental clinic in <span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span>, Bengaluru, we understand your concerns. Our expert dentists in Bengaluru ensure root canal treatments (RCTs) are gentle, precise, and stress-free.</p><p><br></p>', '<p>Why Ivory Dental is Your Best Choice</p><p>Comfort-focused care: Painless and reassuring treatments with advanced techniques.</p><p>Trusted dentists in <span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura,</span>: Highly skilled professionals delivering ethical, high-quality care.</p><p>International-grade hygiene: Rigorous sterilization and safety protocols.</p><p>The Procedure at a Glance</p><p>Diagnosis &amp; Planning – Careful exams and imaging guide the treatment plan.</p><p>Pain-Free Treatment – Modern anesthetics make the procedure smooth and comfortable.</p><p>Restoration – A filling or crown strengthens and restores the tooth.</p><p>Follow-Up – Quick post-treatment care ensures a speedy recovery.</p><p>Conclusion</p><p>If tooth pain is stopping you from smiling freely, visit Ivory Dental, <span style=\"background-color: rgb(28, 72, 45); color: rgba(255, 255, 255, 0.88);\">Vidyaranyapura, </span>trusted dental hospital, where painless and effective root canal&nbsp;care&nbsp;awaits.</p>', '', '68a69f089ce85_1755750152.png', '68a69f089d0d0_1755750152.mp4', 'Root Canal', '2025-08-19 06:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'raj', 'kumar', 'raj@gmail.com', '39427bc27697ee48679772e4c07c13c1', '2024-07-04 15:48:59'),
(2, 'vascular', 'onestop', 'onestopvascularkkd@gmail.com', '7c17c4fcf8ea300dc90090443ae3caa4', '2024-07-05 06:21:31'),
(3, 'onestop', 'vascular', 'onestop@gmail.com', '742f6be9a59899c0a31f29b18f12d5f9', '2024-10-07 11:07:57'),
(4, 'srinivasa', 'dental', 'srinivasadental@gmail.com', '6bb6774d4cec5dbfc18219af92312d37', '2024-10-08 05:21:55'),
(5, 'ivy', 'dental', 'ivydental@gmail.com', '9a96958338107539b23105e7546fba0b', '2025-08-19 04:45:47'),
(6, 'ivydental', 'bangalore', 'ivydentalbangalore@gmail.com', '365afb6d86a993ea531a360f4aa91f0b', '2025-08-19 14:39:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
