-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 09:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` bigint(200) NOT NULL,
  `description` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `listimage` varchar(100) NOT NULL,
  `detialimage` varchar(100) NOT NULL,
  `termCondition` longtext NOT NULL,
  `about` longtext NOT NULL,
  `feature` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addevent`
--

INSERT INTO `addevent` (`id`, `cate_id`, `name`, `location`, `price`, `description`, `startdate`, `enddate`, `status`, `createddate`, `listimage`, `detialimage`, `termCondition`, `about`, `feature`) VALUES
(1, 0, 'Punit Pania Live in Mumbai ', ' Mumbai ', 127, ' Comedy Shows | English, Hindi | 16yrs + | 1hr', '2021-10-21', '2021-10-23', 1, '2121-10-20 00:00:00.000000', 'photo141.jpg', 'photo141.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. Recording or uploading of this stream is not permitted. Strict action will be taken against those who break these guidelines.</p>\n\n<p>4. The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest</p>\n\n<p>5. There may be interruptions in the stream due to internet connectivity issue. We suggest you to have good speed internet connectivity</p>\n\n<p>6. These terms and conditions are subject to change from time to time at the discretion of the organizer</p>\n', '<p>FrontRow Presents Daily Online Open Mic at 8 PM &amp; 10 PM. Rest schedule is available on Frontrow Comedy Community Instagram Page.</p>\n', 0),
(5, 0, 'Masala Sandwich by Amit Tandon Comedy Shows ', 'DELHI', 127, ' Comedy Shows | English, Hindi | 16yrs + | 1hr', '2021-10-22', '2021-10-26', 1, '2121-10-21 00:00:00.000000', 'photo136.jpg', 'photo136.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n', '<p>Masala Sandwich is Amit`s story of finally coming to terms with his mid-life crisis.&nbsp;Teenage kids to health issues, the show is about everything he is facing in his 40s</p>\n', 0),
(7, 0, 'Rajat Chauhan Live (Read the Description) Comedy Shows ', 'DELHI', 127, 'Rajat Chauhan Live (Read the Description) Comedy Shows | English, Hindi | 16yrs + | 2hrs', '2021-10-22', '2021-10-25', 1, '2121-10-21 00:00:00.000000', 'photo133.jpg', 'photo133.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n\n<p>8. These terms and conditions are subject to change from time to time at the</p>\n', '<p>This show is about Childhood love stories. Rajat Chauhan takes you all on a roller coaster journey that is relatable, funny and sometimes emotional. Witness live 2 hours of continuous laughter, that you can watch with family, in a socially distanced and safe venue.</p>\n', 0),
(9, 3, 'Online Martial Arts Coaching for Kids at Home Hobby Classes ', ' Mumbai ', 127, ' English, Hindi | 8yrs + | 1hr', '2021-10-22', '2021-10-25', 1, '2121-10-21 00:00:00.000000', 'photo146.jpg', 'photo146.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n\n<p>8. These terms and conditions are subject to change from time to time at the</p>\n', '<p>This show is about Childhood love stories. Rajat Chauhan takes you all on a roller coaster journey that is relatable, funny and sometimes emotional. Witness live 2 hours of continuous laughter, that you can watch with family, in a socially distanced and safe venue.</p>\n', 0),
(10, 7, 'Digital Marketing & Communication ', ' Mumbai ', 127, ' Education', '2021-10-26', '2021-10-30', 1, '2121-10-26 00:00:00.000000', 'photo190.jpg', 'photo190.jpg', '<ul>\n	<li>100+ open roles across domains across cities</li>\n	<li>50+ new companies hiring every quarter</li>\n	<li>Increase your chance of getting interviewed by 3x</li>\n</ul>\n\n<p>Networking sessions</p>\n\n<ul>\n	<li>Network, collaborate and learn together with your batchmates</li>\n	<li>Get access to an alum base of over 10,000 from over 500 companies</li>\n</ul>\n', '<p>Digital Marketing has been a growing career option which is bound to thrive exponentially in the coming years. Here we curate stories of upGrad learners who took our Digital Marketing program and successfully transitioned into job roles, aligned with their professional aspirations.</p>\n', 0),
(11, 4, 'VIJAY YADAV Live Comedy Shows ', 'Delhi', 127, ' Hindi, English | 16yrs + | 1hr', '2021-10-26', '2021-10-30', 1, '2121-10-26 00:00:00.000000', 'photo192.jpg', 'photo192.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n', '<p>Yadav is effortless with his jokes. If you dig Hindi comedy then he can prove to be a refreshing entry to your watchlist. His jokes mainly surround Haryana, Haryanvis, his friends, and family. He stereotypes them like a pro. Observational comedy is always fun because you relate to it. And don`t</p>\n', 0),
(12, 4, 'VIJAY YADAV Live Comedy Shows ', 'Delhi', 127, ' Hindi, English | 16yrs + | 1hr', '2021-10-26', '2021-10-30', 1, '2121-10-26 00:00:00.000000', 'photo195.jpg', 'photo195.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n', '<p>Yadav is effortless with his jokes. If you dig Hindi comedy then he can prove to be a refreshing entry to your watchlist. His jokes mainly surround Haryana, Haryanvis, his friends, and family. He stereotypes them like a pro. Observational comedy is always fun because you relate to it. And don`t</p>\n', 0),
(15, 7, 'Improve Your Mental Health Education', 'Delhi', 127, 'Education, Masterclass | English | 1hr 30mins', '2021-10-28', '2021-10-30', 1, '2121-10-26 00:00:00.000000', 'photo162.jpg', 'photo162.jpg', '<ol>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n</ol>\n', '<p>Mental illnesses affect 19% of the adult population, 46% of teenagers and 13% of children each year. People struggling with their mental health may be in your family, live next door, teach your children, work in the next cubicle or sit in the same church pew.</p>\n', 0),
(17, 6, 'Online Martial Arts Coaching for Kids at Home Hobby Classes ', 'Kolkata', 127, ' English, Hindi | 8yrs + | 1hr', '2021-10-29', '2021-10-29', 1, '2121-10-26 00:00:00.000000', 'photo118.jpg', 'photo118.jpg', '<p>Active Club Martial Arts Program Features:</p>\n\n<ul>\n	<li>Live, Interactive, Fun and engaging martial arts program</li>\n	<li>Black Belt Certified and Experienced trainers with expertise of engaging with children</li>\n	<li>Age appropriate modules designed by panel of experts including educationalists, &amp; Technical experts</li>\n</ul>\n', '<p>Is your child getting bored and restless at home? / Want to make your kids more active while locked at home?</p>\n\n<p>As kids are no longer exposed to playgrounds, it&rsquo;s time to get the play at home.</p>\n\n<p>Online Martial Arts &amp; Fitness Coaching for Kids at Home</p>\n\n<p>Learn Martial Arts by Certified Technical Experts. Free Trial Session Available</p>\n\n<p>For Age Group &ndash; 7 &ndash; 16 Years</p>\n', 0),
(19, 0, 'jatavkunal447@gmail.com', ' Mumbai ', 400, '', '0000-00-00', '0000-00-00', 1, '2121-10-26 00:00:00.000000', 'photo152.jpg', 'photo152.jpg', '', '', 0),
(20, 7, 'Pimples And Skin Problems Pe Full Stop.', ' Mumbai ', 400, 'Education, Health and Fitness, Wellness | English | 8yrs + | 1hr', '2021-10-30', '2021-11-02', 1, '2121-10-26 00:00:00.000000', 'photo141.jpg', 'photo141.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Get dedicated help on pimples and skin related issues. All important facts on how to keep your skin healthy is covered.</p>\n\n<p>Nutrition and medicines will be discussed.</p>\n\n<p>Join Now and get rid of these problems.</p>\n\n<p>Hurry up!!!</p>\n', 0),
(21, 3, 'Soul - an evening of Bhakti and Sufi music Theatre ', 'studio tamaasha : Mumbai', 500, ' Marathi, Hindi, Gujarati, Bengali, Punjabi, Oriya, Kannada, Rajasthani | All age groups | 1hr 15min', '2021-10-22', '2021-10-30', 1, '2121-10-28 00:00:00.000000', 'photo145.jpg', 'photo145.jpg', '<p>1. Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. You are requested to cooperate with all covid safety protocols</p>\n\n<p>3. STRICTLY no late entry</p>\n\n<p>4. We recommend that you arrive at-least 15 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>5. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>6. Please do not purchase tickets if you feel sick</p>\n\n<p>7. Rights of admission reserved</p>\n\n<p>8. These terms and conditions are subject to change from time to time at the</p>\n', '<p>Some of Mumbai theatre&rsquo;s most talented singer/actors and musicians explore contemporary rendering of music from the Bhakti and Sufi traditions. Music that challenges, provokes and elevates.&nbsp;The live performance in Bengali, Marathi, Gujarati, Hindi, Oriya, Punjabi features</p>\n', 0),
(22, 3, 'Abhi.Neta, Aayenge Drama ', 'Online Streaming', 499, ' English | 18yrs + | 40mins', '2021-10-22', '2021-10-30', 1, '2121-10-28 00:00:00.000000', 'photo150.jpg', 'photo150.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through</p>\n', 0),
(23, 3, 'Surnai Theatre Yeh Raaste Hain Pyaar Ke ', 'Private Theather', 599, '| Hindi | 1hr 45mins', '2021-10-22', '2021-10-30', 1, '2121-10-28 00:00:00.000000', 'photo142.jpg', 'photo142.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through</p>\n', 0),
(24, 3, 'Dada Ek Good News Aahe Drama ', 'Multiples Place', 789, '| Marathi | 2hrs 10mins', '2021-10-28', '2021-10-30', 1, '2121-10-28 00:00:00.000000', 'photo128.jpg', 'photo128.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through</p>\n', 0),
(25, 3, 'Tu Mhanshil Tasa Drama 2', 'Multiples Place2', 8902, 'dncndclanl', '0000-00-00', '0000-00-00', 1, '2121-10-28 00:00:00.000000', 'photo163.jpg', 'photo163.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through</p>\n', 0),
(27, 4, '8 Minute funnies - Live Standup Comedy Show Comedy Shows 1', ' The joy Sport : Mumbai 1', 3401, 'xcnndschb hfhdidhih', '0000-00-00', '0000-00-00', 1, '2121-10-28 00:00:00.000000', 'photo194.jpg', 'photo194.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through</p>\n', 0),
(29, 4, 'Ab hai aapki baari By Inder Sahani Comedy Show1', 'The J Spot : mumbai1', 401, '1', '0000-00-00', '0000-00-00', 1, '2121-10-28 00:00:00.000000', 'photo150.jpg', 'photo150.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.1</li>\n</ul>\n', '<p>Abhi.Neta, Aayenge is based on Ionesco&rsquo;s play The Leader - written in 1953, it is an absurdist look at the role played by the media and hype in the creation of political propaganda. Abhi.Neta, Aayenge inverts the practices of storytelling: instead of hiding the structures of fiction-making, through1</p>\n', 0),
(31, 4, 'The Late Night Show at The J Spot Comedy Shows ', 'The J spot : Bindra Mumbai', 349, ' | English, Hindi | 16yrs + | 1hr', '2021-11-02', '2021-11-06', 1, '2121-11-02 00:00:00.000000', 'photo189.jpg', 'photo189.jpg', '<p>&nbsp;Tickets once booked cannot be exchanged or refunded</p>\n\n<p>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</p>\n\n<p>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</p>\n\n<p>4. It is mandatory to wear masks at all times and follow social distancing norms</p>\n\n<p>5. Please do not purchase tickets if you feel sick</p>\n\n<p>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</p>\n\n<p>7. Rights of admission reserved</p>\n\n<p>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</p>\n\n<p>9 Age Limit 16yrs+</p>\n', '<p>The J Spot Brings to You The Late night Show</p>\n\n<p>&nbsp;</p>\n\n<p>The show is a little late vibe is little different</p>\n\n<p>&nbsp;</p>\n\n<p>The Show is going to be an Amazing experience</p>\n', 0),
(32, 4, 'Punit Pania Live in Mumbai ', ' Mumbai ', 599, ' Comedy Shows | English, Hindi | 16yrs + | 1hr', '2021-11-03', '2021-11-04', 1, '2121-11-02 00:00:00.000000', 'photo131.jpg', 'photo131.jpg', '<p>mvmhbjbbn nknkn lkkjl ljj jlk</p>\n', '<p>bk,nbkjnknk nlkjljmn nkjnkjgv</p>\n', 0),
(33, 4, 'Punit Pania Live in Mumbai ', ' Mumbai ', 599, ' Comedy Shows | English, Hindi | 16yrs + | 1hr', '2021-11-03', '2021-11-04', 1, '2121-11-02 00:00:00.000000', 'photo113.jpg', 'photo113.jpg', '', '', 0),
(34, 4, 'Punit Pania Live in Mumbai ', ' Mumbai ', 0, '', '2021-11-03', '2021-11-04', 1, '2121-11-02 00:00:00.000000', 'photo141.jpg', 'photo141.jpg', '', '', 0),
(36, 0, '', '', 0, '', '0000-00-00', '0000-00-00', 1, '2121-11-02 00:00:00.000000', 'photo179.jpg', 'photo179.jpg', '', '', 0),
(38, 3, 'Diwali Pahat At Shanmukhananda Hall Indian Classical ', ' Mumbai ', 199, ' Classical | Hindi | 3hrs', '0000-00-00', '0000-00-00', 1, '2121-11-02 00:00:00.000000', 'photo110.jpg', 'photo110.jpg', '<ul>\n	<li>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</li>\n	<li>Artists at all times remain fully and solely liable and responsible for their actions, expressions and/or views. BookMyShow will not be responsible for their actions, expressions and/or views, and any claims, damages, outrage arising due to the comments, pictures or videos posted by the Artists on the Channels.&nbsp;</li>\n	<li>Additionally, BookMyShow shall not be held liable or responsible for any violation of intellectual property rights that may arise out of any Artist performance.</li>\n	<li>By registering yourself on BookMyShow, you hereby expressly agree to the above terms.</li>\n</ul>\n', '<p>As the Auditoriums are getting open from 22nd October 2021</p>\n\n<p>Swarsparsh(Serving Music Proudly) Wish to make this Diwali memorable in a grand musical way.</p>\n\n<p>Swarsparsh hosting a grand musical concert Indian Oil Diwali Pahat going to be present by legendary artist Smt.Kaushiki Chakraborty and Shri. Rashid ji Khan. Indian classical sensations Kaushikiji and Rashidji will entertain the music lovers with their marvellous presentation during this event. First time ever 2 classical performers from different musical gharanas are coming together to perform this Diwali Pahat. Its honor for Swarsparsh for hosting such a grand event. Both the artist has been presented phenomenal performance nationally and internationally. This duo has a unique style of presentation of classical music, Abhang, Bhajan, Thumri, Gazhal, and many more and has a grand audience. These duos are performing first time in Diwali Pahat for Mumbaikars. Definitely its grand feast for the audience.&nbsp;</p>\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `eventid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `quntity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `gst` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `eventid`, `userid`, `quntity`, `price`, `gst`, `status`, `createddate`, `total`) VALUES
(1, 1, 0, 2, 127, 46, 0, 2121, 300),
(2, 1, 0, 4, 127, 91, 1, 2121, 599),
(3, 1, 0, 4, 127, 91, 1, 2121, 599),
(4, 1, 0, 5, 127, 114, 1, 2121, 749),
(5, 23, 0, 3, 599, 323, 1, 2121, 2120),
(6, 23, 0, 3, 599, 323, 1, 2121, 2120),
(7, 23, 0, 0, 599, 0, 1, 2121, 0),
(16, 12, 2, 3, 127, 69, 1, 2121, 450);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `status`, `createddate`) VALUES
(3, 'playing', 1, '2021-11-02 00:00:00.000000'),
(4, 'comedy', 1, '2121-10-21 00:00:00.000000'),
(6, 'plays', 1, '2021-11-01 00:00:00.000000'),
(7, 'Education', 1, '2121-10-26 00:00:00.000000'),
(9, 'photography', 1, '2121-11-02 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `indexpromation`
--

CREATE TABLE `indexpromation` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promation`
--

CREATE TABLE `promation` (
  `p_ID` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_url` varchar(100) NOT NULL,
  `p_Dimage` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promation`
--

INSERT INTO `promation` (`p_ID`, `p_name`, `p_url`, `p_Dimage`, `status`, `create_date`) VALUES
(1, 'Punit Pania Live in Mumbai', 'http://localhost/event/page.php?id=1', 'pic58.jpg', 1, '2121-10-30'),
(2, 'diwali2', 'http://localhost/event/page.php?id=38', 'pic63.jpg', 1, '2121-11-02'),
(3, 'yadav', 'http://localhost/event/page.php?id=12', 'pic141.jpg', 1, '2121-11-02'),
(4, 'capture2', 'http://localhost/event/page.php?id=39', 'pic230.jpg', 1, '2121-11-02'),
(5, 'capture', 'http://localhost/event/page.php?id=39', 'pic197.jpg', 1, '2121-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdDate` datetime(6) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `name`, `email`, `pass`, `mobile`, `status`, `createdDate`, `image`) VALUES
(1, 'Tushar', 'chauhan@gmail.com', 'admin@123', 7835906, 1, '2121-11-07 00:00:00.000000', 'image670.jpg'),
(2, 'aman', 'aman@123gmail.com', 'admin@123', 908765412, 1, '2121-11-07 00:00:00.000000', 'image494.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `name`, `email`, `pass`, `mobile`, `image`, `status`, `create_date`) VALUES
(2, 'Ankit', 'chauhan@gmail.com', 'admin@123', 7835906264, 'pic864jpg', 1, '2121-11-07 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `indexpromation`
--
ALTER TABLE `indexpromation`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `promation`
--
ALTER TABLE `promation`
  ADD PRIMARY KEY (`p_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addevent`
--
ALTER TABLE `addevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `indexpromation`
--
ALTER TABLE `indexpromation`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promation`
--
ALTER TABLE `promation`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
