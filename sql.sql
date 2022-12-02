
CREATE TABLE `clicks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vacancy_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clicks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clicks`
--

INSERT INTO `clicks` (`id`, `vacancy_ref`, `clicks`, `created_at`, `updated_at`) VALUES
(1, 'CPT000820', 18, '2022-11-30 10:27:48', '2022-12-02 03:06:27'),
(2, 'CPT000821', 6, '2022-11-30 10:27:48', '2022-11-30 19:09:43'),
(3, 'CPT000822', 3, '2022-11-30 10:27:48', '2022-11-30 19:08:53'),
(4, 'PTA000218', 3, '2022-11-30 10:27:49', '2022-11-30 19:09:38'),
(5, 'PTA000251', 2, '2022-11-30 10:27:49', '2022-12-01 10:58:18'),
(6, 'CPT000823', 1, '2022-11-30 10:27:49', '2022-12-01 19:24:05'),
(7, 'CPT000824', 5, '2022-11-30 10:27:49', '2022-12-01 19:23:02'),
(8, 'PTA000191', 2, '2022-11-30 10:27:49', '2022-12-01 10:58:24'),
(9, 'PTA000272', 2, '2022-11-30 10:27:49', '2022-12-01 15:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `click_records`
--

CREATE TABLE `click_records` (
  `id` int(11) NOT NULL,
  `vacancy_ref` varchar(20) NOT NULL,
  `click_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `click_records`
--

INSERT INTO `click_records` (`id`, `vacancy_ref`, `click_date`) VALUES
(1, 'CPT000822', '2022-11-30'),
(2, 'CPT000822', '2022-11-30'),
(3, 'CPT000821', '2022-11-10'),
(4, 'CPT000824', '2022-11-15'),
(5, 'CPT000824', '2022-11-14'),
(6, 'PTA000218', '2022-12-01'),
(7, 'PTA000272', '2022-11-30'),
(8, 'PTA000191', '2022-12-01'),
(9, 'PTA000251', '2022-11-17'),
(10, 'CPT000824', '2022-11-30'),
(11, 'PTA000218', '2022-11-30'),
(12, 'CPT000821', '2022-12-01'),
(13, 'CPT000820', '2022-12-01'),
(14, 'PTA000251', '2022-12-01'),
(15, 'PTA000191', '2022-12-01'),
(16, 'PTA000272', '2022-12-01'),
(17, 'CPT000820', '2022-12-01'),
(18, 'CPT000820', '2022-12-01'),
(19, 'CPT000820', '2022-12-01'),
(20, 'CPT000820', '2022-12-01'),
(21, 'CPT000824', '2022-12-01'),
(22, 'CPT000823', '2022-12-01'),
(23, 'CPT000820', '2022-12-02'),
(24, 'CPT000820', '2022-12-02'),
(25, 'CPT000820', '2022-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_30_094847_create_clicks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'parallel', 'admin@parallel.co.za', NULL, '$2y$10$kqMnr03amMC3vxHftwZneOP/oAnk9CKG3TQikHA.yAwkrLcEMmfvi', NULL, '2022-11-30 10:59:06', '2022-11-30 10:59:06'),
(2, 'Olyjay', 'info@olyjay.co.za', NULL, '$2y$10$k3aDlvOJLCth3u8yBH9LwOaRN7sjkZsRNoSBkQzKwLd0QgRpZugpC', NULL, '2022-12-02 02:26:42', '2022-12-02 02:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `company_ref` varchar(50) NOT NULL,
  `vacancy_ref` varchar(20) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `salary_max` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `company_ref`, `vacancy_ref`, `job_title`, `salary_max`, `start_date`, `expiry_date`) VALUES
(1, 'parallel', 'CPT000820/BR', 'Sales Consultant', 'R 18 000', '2022-11-29', '2022-12-31'),
(2, 'parallel', 'CPT000821/BR', 'Marketing Consultant', 'R 27 500', '2022-11-29', '2022-12-31'),
(3, 'parallel', 'CPT000822/BR', 'Marine Engineer', '', '2022-11-29', '2022-12-31'),
(4, 'parallel', 'PTA000218/NM', 'Finance manager', '6000', '2022-11-29', '2022-12-31'),
(5, 'parallel', 'PTA000251/NM', 'TestTestingTested', '49000', '2022-11-29', '2022-12-31'),
(6, 'parallel', 'CPT000823/BR', 'Tax Accountant', '', '2022-11-29', '2022-12-31'),
(7, 'parallel', 'CPT000824/BR', 'Dental Receptionist', 'R 9000', '2022-11-29', '2022-12-31'),
(8, 'parallel', 'PTA000191/NM', 'Advanced Support', '50000', '2022-11-29', '2022-12-31'),
(9, 'parallel', 'PTA000272/NM', 'Assessment', '8000', '2022-11-29', '2022-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `click_records`
--
ALTER TABLE `click_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `click_records`
--
ALTER TABLE `click_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
