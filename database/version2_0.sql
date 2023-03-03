-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 06:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `version2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_conveyances`
--

CREATE TABLE `apprehended_conveyances` (
  `id` int(11) NOT NULL,
  `NoUnits` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_finished_products`
--

CREATE TABLE `apprehended_finished_products` (
  `id` int(11) NOT NULL,
  `Volume_inPcs` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_forest_products`
--

CREATE TABLE `apprehended_forest_products` (
  `id` int(11) NOT NULL,
  `Volume_inBoardFeet` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_implements_equipment`
--

CREATE TABLE `apprehended_implements_equipment` (
  `id` int(11) NOT NULL,
  `NoUnits` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_rattan_poles`
--

CREATE TABLE `apprehended_rattan_poles` (
  `id` int(11) NOT NULL,
  `Volume_inLinealMeters` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apprehended_wood_charcoal`
--

CREATE TABLE `apprehended_wood_charcoal` (
  `id` int(11) NOT NULL,
  `Volume_inSacks` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `area_developed`
--

CREATE TABLE `area_developed` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Universe` varchar(255) NOT NULL,
  `Baseline` varchar(255) NOT NULL,
  `NGP_Accomplishment` int(255) NOT NULL,
  `Inremp` varchar(255) NOT NULL,
  `CBFM_CARP` varchar(255) NOT NULL,
  `Tenurial_Instrument` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `baseline_for_csc`
--

CREATE TABLE `baseline_for_csc` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `Within_CBFM_Area_No` varchar(255) NOT NULL,
  `Within_CBFM_Area_ha` varchar(255) NOT NULL,
  `DENR_Jurisdiction_Area_No` varchar(255) NOT NULL,
  `DENR_Jurisdiction_ha` varchar(255) NOT NULL,
  `Devolved_to_LGUs_No` varchar(255) NOT NULL,
  `Devolved_to_LGUs_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cadastral_survey`
--

CREATE TABLE `cadastral_survey` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Municipality` varchar(255) NOT NULL,
  `Uncontested` varchar(255) NOT NULL,
  `Contested` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cbep_extension_officer`
--

CREATE TABLE `cbep_extension_officer` (
  `id` int(11) NOT NULL,
  `penro_cenro` varchar(255) NOT NULL,
  `numbers` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cbep_jobs_generated`
--

CREATE TABLE `cbep_jobs_generated` (
  `id` int(11) NOT NULL,
  `penro_cenro` varchar(255) NOT NULL,
  `numbers` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cbep_persons_employed`
--

CREATE TABLE `cbep_persons_employed` (
  `id` int(11) NOT NULL,
  `penro_cenro` varchar(255) NOT NULL,
  `numbers` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classified_coastal_wbl`
--

CREATE TABLE `classified_coastal_wbl` (
  `id` int(11) NOT NULL,
  `Coastal_name_wbl` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Classification` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Exit_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classified_major_rivers`
--

CREATE TABLE `classified_major_rivers` (
  `id` int(11) NOT NULL,
  `Name_Rivers` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Classification` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Exit_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classified_minor_rivers`
--

CREATE TABLE `classified_minor_rivers` (
  `id` int(11) NOT NULL,
  `Name_Rivers` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Classification` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Exit_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classified_principle_rivers`
--

CREATE TABLE `classified_principle_rivers` (
  `id` int(11) NOT NULL,
  `Name_Rivers` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Classification` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Exit_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confiscated_conveyances`
--

CREATE TABLE `confiscated_conveyances` (
  `id` int(11) NOT NULL,
  `NoUnits` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confiscated_forest_products`
--

CREATE TABLE `confiscated_forest_products` (
  `id` int(11) NOT NULL,
  `Volume_inBoardFeet` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confiscated_implements_equipment`
--

CREATE TABLE `confiscated_implements_equipment` (
  `id` int(11) NOT NULL,
  `NoUnits` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confiscated_rattan_poles`
--

CREATE TABLE `confiscated_rattan_poles` (
  `id` int(11) NOT NULL,
  `Volume_inLinealMeters` varchar(255) NOT NULL,
  `EstValue` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `critical_watersheds`
--

CREATE TABLE `critical_watersheds` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_watershed` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `critical_watersheds`
--

INSERT INTO `critical_watersheds` (`id`, `Province`, `Name_watershed`, `Area_ha`) VALUES
(1, 'Lanao del Norte', '2334243', '234324');

-- --------------------------------------------------------

--
-- Table structure for table `csc_issued`
--

CREATE TABLE `csc_issued` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `Within_CBFM_Area_No` varchar(255) NOT NULL,
  `Within_CBFM_Area_ha` varchar(255) NOT NULL,
  `DENR_Jurisdiction_Area_No` varchar(255) NOT NULL,
  `DENR_Jurisdiction_ha` varchar(255) NOT NULL,
  `Devolved_to_LGUs_No` varchar(255) NOT NULL,
  `Devolved_to_LGUs_ha` varchar(255) NOT NULL,
  `Total_no` varchar(255) NOT NULL,
  `Total_area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc_outside_cbfma`
--

CREATE TABLE `csc_outside_cbfma` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `For_Renewal_Renewed` varchar(255) NOT NULL,
  `For_ReEvaluation` varchar(255) NOT NULL,
  `For_Transfer` varchar(255) NOT NULL,
  `For_Cancellation` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc_within_cbfma`
--

CREATE TABLE `csc_within_cbfma` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `For_Renewal_Renewed` varchar(255) NOT NULL,
  `For_ReEvaluation` varchar(255) NOT NULL,
  `For_Transfer` varchar(255) NOT NULL,
  `For_Cancellation` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_cfbma`
--

CREATE TABLE `existing_cfbma` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `No_cbfma` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_flgla`
--

CREATE TABLE `existing_flgla` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Municipality_City` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Name_of_instrument` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_flgma`
--

CREATE TABLE `existing_flgma` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Municipality_City` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Name_of_instrument` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_industrial_forest_management_area`
--

CREATE TABLE `existing_industrial_forest_management_area` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `name_of_holder` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Area_planted_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_protection_area_community_brma`
--

CREATE TABLE `existing_protection_area_community_brma` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_Protected_Area` varchar(255) NOT NULL,
  `Name_of_PACBRMA_holder` varchar(255) NOT NULL,
  `Location_of_CBP_area` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_sifma`
--

CREATE TABLE `existing_sifma` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Name_of_leasee` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Area_planted_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_slup`
--

CREATE TABLE `existing_slup` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Name_of_Permittee` varchar(255) NOT NULL,
  `Type_of_slup` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing_tfla`
--

CREATE TABLE `existing_tfla` (
  `id` int(11) NOT NULL,
  `Penro` varchar(255) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Name_of_holder` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fireline_maintained`
--

CREATE TABLE `fireline_maintained` (
  `id` int(11) NOT NULL,
  `Penro_Cenro` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Length_m` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forest_cover`
--

CREATE TABLE `forest_cover` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Close` varchar(255) NOT NULL,
  `Open` varchar(255) NOT NULL,
  `Mangrove` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forest_land_upfa`
--

CREATE TABLE `forest_land_upfa` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `City_Municipality` varchar(255) NOT NULL,
  `Flup_Formulated` varchar(255) NOT NULL,
  `Flup_Adopted` varchar(255) NOT NULL,
  `Total_Forestland_with_LGU` varchar(255) NOT NULL,
  `Total_Area_For_Flup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forest_protection_officers_peo`
--

CREATE TABLE `forest_protection_officers_peo` (
  `id` int(11) NOT NULL,
  `Forest_Protection_Officers_PEO` varchar(255) NOT NULL,
  `Number_of_FPos_Peos_hired` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inregrated_watershed_management_plan_prepared`
--

CREATE TABLE `inregrated_watershed_management_plan_prepared` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_watershed` varchar(255) NOT NULL,
  `City_Municipality` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inremp_natural_resource_management_area_developed`
--

CREATE TABLE `inremp_natural_resource_management_area_developed` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Target` varchar(255) NOT NULL,
  `Accomplishment_ha` varchar(255) NOT NULL,
  `Accomplishment_percent` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_of_cwr_monitored`
--

CREATE TABLE `inventory_of_cwr_monitored` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `No_of_CWR_holders` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `key_biodiversity_areas`
--

CREATE TABLE `key_biodiversity_areas` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Key_Biodiversity_areas` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Legal_basis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_classification_and_distribution`
--

CREATE TABLE `land_classification_and_distribution` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Total_land_area` varchar(255) NOT NULL,
  `Certified_alienable_and_Disposable_land` varchar(255) NOT NULL,
  `Total_forestland` varchar(255) NOT NULL,
  `Unclassified_forestland` varchar(255) NOT NULL,
  `total_classified_forestland` varchar(255) NOT NULL,
  `Established_forest_reserves` varchar(255) NOT NULL,
  `Established_timberland` varchar(255) NOT NULL,
  `National_parks_and_grbs_wa` varchar(255) NOT NULL,
  `Military_and_naval_reservations` varchar(255) NOT NULL,
  `civil_reservations` varchar(255) NOT NULL,
  `fishpond` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_disposition_issued`
--

CREATE TABLE `land_disposition_issued` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Total_Residential_Patents_Issued_Patents_issued_no` varchar(255) NOT NULL,
  `Total_Residential_Patents_Issued_Lot_ha` varchar(255) NOT NULL,
  `Total_Agricultural_Patents_Issued_Patents_issued_no` varchar(255) NOT NULL,
  `Total_Agricultural_Patents_Issued_Lot_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_checkpoint`
--

CREATE TABLE `list_of_checkpoint` (
  `id` int(11) NOT NULL,
  `Cenro` varchar(255) NOT NULL,
  `Number_of_look_out_tower` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major_river_basins`
--

CREATE TABLE `major_river_basins` (
  `id` int(11) NOT NULL,
  `River_basins` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `provinces_covered` varchar(255) NOT NULL,
  `city_municipality_covered` varchar(255) NOT NULL,
  `river_tributary` varchar(255) NOT NULL,
  `outlet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management_of_foreshore_areas_processed_and_endorsed`
--

CREATE TABLE `management_of_foreshore_areas_processed_and_endorsed` (
  `id` int(11) NOT NULL,
  `Operating_unit` varchar(255) NOT NULL,
  `no_of_foreshore_area` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management_of_foreshore_areas_processed_and_endorsed`
--

INSERT INTO `management_of_foreshore_areas_processed_and_endorsed` (`id`, `Operating_unit`, `no_of_foreshore_area`, `area_ha`, `year`) VALUES
(1, 'ashdbashdsbd', '234', '234234234', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `ngp_area_planted`
--

CREATE TABLE `ngp_area_planted` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngp_number_of_polygons`
--

CREATE TABLE `ngp_number_of_polygons` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `no_of_polygons` varchar(255) NOT NULL,
  `no_of_sites` varchar(255) NOT NULL,
  `no_of_beneficiaries` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngp_seedlings_planted_by_commodity`
--

CREATE TABLE `ngp_seedlings_planted_by_commodity` (
  `id` int(11) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `number_of_seedlings_planted` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngp_seedling_planted`
--

CREATE TABLE `ngp_seedling_planted` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `number_of_seedlings_planted` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngp_seedling_production`
--

CREATE TABLE `ngp_seedling_production` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `number_of_seedlings_production` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngp_seedling_production`
--

INSERT INTO `ngp_seedling_production` (`id`, `province`, `number_of_seedlings_production`, `year`) VALUES
(1, 'Misamis Oriental', '234234', '2001');

-- --------------------------------------------------------

--
-- Table structure for table `ngp_survival_rate_percentage`
--

CREATE TABLE `ngp_survival_rate_percentage` (
  `id` int(11) NOT NULL,
  `penro_cenro_pa` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngp_validated_project_sites`
--

CREATE TABLE `ngp_validated_project_sites` (
  `id` int(11) NOT NULL,
  `penro_cenro_pa` varchar(255) NOT NULL,
  `area_ha` varchar(255) NOT NULL,
  `no_of_seedlings_validated` varchar(255) NOT NULL,
  `no_of_seedlings_planted` varchar(255) NOT NULL,
  `no_of_seedlings_contracted` varchar(255) NOT NULL,
  `survival` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nipas_and_locally_managed_marine_protected_areas`
--

CREATE TABLE `nipas_and_locally_managed_marine_protected_areas` (
  `id` int(11) NOT NULL,
  `location_Province` varchar(255) NOT NULL,
  `No_of_MPAs` varchar(255) NOT NULL,
  `total_area_ha` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `number_of_forest_ranger`
--

CREATE TABLE `number_of_forest_ranger` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `forest_rangers_no` varchar(255) NOT NULL,
  `teams_no` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `number_of_incidents_on_apprehended`
--

CREATE TABLE `number_of_incidents_on_apprehended` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `No_of_Incidents` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `number_of_waterbodies`
--

CREATE TABLE `number_of_waterbodies` (
  `id` int(11) NOT NULL,
  `waterbodies_by_category` varchar(255) NOT NULL,
  `no_of_waterbodies` varchar(255) NOT NULL,
  `no_classified_waterbodies` varchar(255) NOT NULL,
  `no_of_unclassified_waterbodies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proclaimed_propected_areas_under`
--

CREATE TABLE `proclaimed_propected_areas_under` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_Protected_Area` varchar(255) NOT NULL,
  `E_NIPAS_Area_ha` varchar(255) NOT NULL,
  `PASA_Area_ha` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Terrestrial_ha` varchar(255) NOT NULL,
  `Seascape_ha` varchar(255) NOT NULL,
  `Mangroves_ha` varchar(255) NOT NULL,
  `Forestland_ha` varchar(255) NOT NULL,
  `Lakes_ha` varchar(255) NOT NULL,
  `Rivers_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proclaimed_protected_areas_under_nipas`
--

CREATE TABLE `proclaimed_protected_areas_under_nipas` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_protected_area` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Pa` varchar(255) NOT NULL,
  `Bufferzone` varchar(255) NOT NULL,
  `Total_area_ha` varchar(255) NOT NULL,
  `Proclamation_no_date` varchar(255) NOT NULL,
  `Legislation_no_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_of_community_resource_management_framework`
--

CREATE TABLE `status_of_community_resource_management_framework` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `No_of_CBFMA` varchar(255) NOT NULL,
  `CBFMA_With_No_CRMF` varchar(255) NOT NULL,
  `CBFMA_With_CRMF_Needs_Updating` varchar(255) NOT NULL,
  `CBFMA_With_Updated_CRMF` varchar(255) NOT NULL,
  `CBFMA_With_Affirmed_CRMF` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary_of_cwr_monitored`
--

CREATE TABLE `summary_of_cwr_monitored` (
  `id` int(11) NOT NULL,
  `OperatingUnit` varchar(255) NOT NULL,
  `No_of_CWR_WFP` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary_of_forest_land_use_plan_formulation_and_adoption`
--

CREATE TABLE `summary_of_forest_land_use_plan_formulation_and_adoption` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Total_Municipality_City` varchar(255) NOT NULL,
  `Municipality_with_Forestland` varchar(255) NOT NULL,
  `Accomplishment_Formulation` varchar(255) NOT NULL,
  `Accomplishment_Adoption` varchar(255) NOT NULL,
  `Baseline_Formulation` varchar(255) NOT NULL,
  `Baseline_Adoption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary_of_watershed_characterization`
--

CREATE TABLE `summary_of_watershed_characterization` (
  `id` int(11) NOT NULL,
  `PENRO` varchar(255) NOT NULL,
  `Total_Number_of_River_Basin_Watershed_Sub_Watershed` varchar(255) NOT NULL,
  `Status_Profiling_Characterization` varchar(255) NOT NULL,
  `Status_Vulnerability_Assessment` varchar(255) NOT NULL,
  `Status_IWMP_Prepared` varchar(255) NOT NULL,
  `Baseline_Profiling_Characterization` varchar(255) NOT NULL,
  `Baseline_Vulnerability_Assessment` varchar(255) NOT NULL,
  `Baseline_IWMP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenurial_instruments`
--

CREATE TABLE `tenurial_instruments` (
  `id` int(11) NOT NULL,
  `Tenurial_Instruments` varchar(255) NOT NULL,
  `No_of_Holders` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', '1', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `watershed_characterization_profiling`
--

CREATE TABLE `watershed_characterization_profiling` (
  `id` int(11) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_Watershed` varchar(255) NOT NULL,
  `City_Municipality_Barangay` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watershed_characterization_profiling`
--

INSERT INTO `watershed_characterization_profiling` (`id`, `Year`, `Province`, `Name_of_Watershed`, `City_Municipality_Barangay`, `Area_ha`) VALUES
(1, '2001', 'fknafnandasdn', 'njandjasnd', 'anjdansdjn3', '345345');

-- --------------------------------------------------------

--
-- Table structure for table `watershed_forest_reserve_proclaimed_watershed`
--

CREATE TABLE `watershed_forest_reserve_proclaimed_watershed` (
  `id` int(11) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_Watershed` varchar(255) NOT NULL,
  `City_Municiaplity` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL,
  `Proclamation_No` varchar(255) NOT NULL,
  `Proclamation_Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `watershed_supporting_river_irrigation_system_of_nia`
--

CREATE TABLE `watershed_supporting_river_irrigation_system_of_nia` (
  `id` int(11) NOT NULL,
  `Name_of_Watershed` varchar(255) NOT NULL,
  `Regional_Irrigation_System_RIS` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Municipality` varchar(255) NOT NULL,
  `Watershed_Area_ha` varchar(255) NOT NULL,
  `RIS_Service_Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `watershed_vulnerability_assessment`
--

CREATE TABLE `watershed_vulnerability_assessment` (
  `id` int(11) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Name_of_Watershed` varchar(255) NOT NULL,
  `City_Municipality_Barangay` varchar(255) NOT NULL,
  `Area_ha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprehended_conveyances`
--
ALTER TABLE `apprehended_conveyances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprehended_finished_products`
--
ALTER TABLE `apprehended_finished_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprehended_forest_products`
--
ALTER TABLE `apprehended_forest_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprehended_implements_equipment`
--
ALTER TABLE `apprehended_implements_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprehended_rattan_poles`
--
ALTER TABLE `apprehended_rattan_poles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprehended_wood_charcoal`
--
ALTER TABLE `apprehended_wood_charcoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_developed`
--
ALTER TABLE `area_developed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baseline_for_csc`
--
ALTER TABLE `baseline_for_csc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastral_survey`
--
ALTER TABLE `cadastral_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbep_extension_officer`
--
ALTER TABLE `cbep_extension_officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbep_jobs_generated`
--
ALTER TABLE `cbep_jobs_generated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbep_persons_employed`
--
ALTER TABLE `cbep_persons_employed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classified_coastal_wbl`
--
ALTER TABLE `classified_coastal_wbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classified_major_rivers`
--
ALTER TABLE `classified_major_rivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classified_minor_rivers`
--
ALTER TABLE `classified_minor_rivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classified_principle_rivers`
--
ALTER TABLE `classified_principle_rivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confiscated_conveyances`
--
ALTER TABLE `confiscated_conveyances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confiscated_forest_products`
--
ALTER TABLE `confiscated_forest_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confiscated_implements_equipment`
--
ALTER TABLE `confiscated_implements_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confiscated_rattan_poles`
--
ALTER TABLE `confiscated_rattan_poles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `critical_watersheds`
--
ALTER TABLE `critical_watersheds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_issued`
--
ALTER TABLE `csc_issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_outside_cbfma`
--
ALTER TABLE `csc_outside_cbfma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_within_cbfma`
--
ALTER TABLE `csc_within_cbfma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_cfbma`
--
ALTER TABLE `existing_cfbma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_flgla`
--
ALTER TABLE `existing_flgla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_flgma`
--
ALTER TABLE `existing_flgma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_industrial_forest_management_area`
--
ALTER TABLE `existing_industrial_forest_management_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_protection_area_community_brma`
--
ALTER TABLE `existing_protection_area_community_brma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_sifma`
--
ALTER TABLE `existing_sifma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_slup`
--
ALTER TABLE `existing_slup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_tfla`
--
ALTER TABLE `existing_tfla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fireline_maintained`
--
ALTER TABLE `fireline_maintained`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forest_cover`
--
ALTER TABLE `forest_cover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forest_land_upfa`
--
ALTER TABLE `forest_land_upfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forest_protection_officers_peo`
--
ALTER TABLE `forest_protection_officers_peo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inregrated_watershed_management_plan_prepared`
--
ALTER TABLE `inregrated_watershed_management_plan_prepared`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inremp_natural_resource_management_area_developed`
--
ALTER TABLE `inremp_natural_resource_management_area_developed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_of_cwr_monitored`
--
ALTER TABLE `inventory_of_cwr_monitored`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_biodiversity_areas`
--
ALTER TABLE `key_biodiversity_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_classification_and_distribution`
--
ALTER TABLE `land_classification_and_distribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_disposition_issued`
--
ALTER TABLE `land_disposition_issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_checkpoint`
--
ALTER TABLE `list_of_checkpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major_river_basins`
--
ALTER TABLE `major_river_basins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_of_foreshore_areas_processed_and_endorsed`
--
ALTER TABLE `management_of_foreshore_areas_processed_and_endorsed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_area_planted`
--
ALTER TABLE `ngp_area_planted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_number_of_polygons`
--
ALTER TABLE `ngp_number_of_polygons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_seedlings_planted_by_commodity`
--
ALTER TABLE `ngp_seedlings_planted_by_commodity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_seedling_planted`
--
ALTER TABLE `ngp_seedling_planted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_seedling_production`
--
ALTER TABLE `ngp_seedling_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_survival_rate_percentage`
--
ALTER TABLE `ngp_survival_rate_percentage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngp_validated_project_sites`
--
ALTER TABLE `ngp_validated_project_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nipas_and_locally_managed_marine_protected_areas`
--
ALTER TABLE `nipas_and_locally_managed_marine_protected_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_of_forest_ranger`
--
ALTER TABLE `number_of_forest_ranger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_of_incidents_on_apprehended`
--
ALTER TABLE `number_of_incidents_on_apprehended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_of_waterbodies`
--
ALTER TABLE `number_of_waterbodies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proclaimed_propected_areas_under`
--
ALTER TABLE `proclaimed_propected_areas_under`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proclaimed_protected_areas_under_nipas`
--
ALTER TABLE `proclaimed_protected_areas_under_nipas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_of_community_resource_management_framework`
--
ALTER TABLE `status_of_community_resource_management_framework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_of_cwr_monitored`
--
ALTER TABLE `summary_of_cwr_monitored`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_of_forest_land_use_plan_formulation_and_adoption`
--
ALTER TABLE `summary_of_forest_land_use_plan_formulation_and_adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_of_watershed_characterization`
--
ALTER TABLE `summary_of_watershed_characterization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenurial_instruments`
--
ALTER TABLE `tenurial_instruments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `watershed_characterization_profiling`
--
ALTER TABLE `watershed_characterization_profiling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watershed_forest_reserve_proclaimed_watershed`
--
ALTER TABLE `watershed_forest_reserve_proclaimed_watershed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watershed_supporting_river_irrigation_system_of_nia`
--
ALTER TABLE `watershed_supporting_river_irrigation_system_of_nia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watershed_vulnerability_assessment`
--
ALTER TABLE `watershed_vulnerability_assessment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apprehended_conveyances`
--
ALTER TABLE `apprehended_conveyances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apprehended_finished_products`
--
ALTER TABLE `apprehended_finished_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apprehended_forest_products`
--
ALTER TABLE `apprehended_forest_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apprehended_implements_equipment`
--
ALTER TABLE `apprehended_implements_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apprehended_rattan_poles`
--
ALTER TABLE `apprehended_rattan_poles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apprehended_wood_charcoal`
--
ALTER TABLE `apprehended_wood_charcoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area_developed`
--
ALTER TABLE `area_developed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baseline_for_csc`
--
ALTER TABLE `baseline_for_csc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastral_survey`
--
ALTER TABLE `cadastral_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cbep_extension_officer`
--
ALTER TABLE `cbep_extension_officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cbep_jobs_generated`
--
ALTER TABLE `cbep_jobs_generated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cbep_persons_employed`
--
ALTER TABLE `cbep_persons_employed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classified_coastal_wbl`
--
ALTER TABLE `classified_coastal_wbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classified_major_rivers`
--
ALTER TABLE `classified_major_rivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classified_minor_rivers`
--
ALTER TABLE `classified_minor_rivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classified_principle_rivers`
--
ALTER TABLE `classified_principle_rivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confiscated_conveyances`
--
ALTER TABLE `confiscated_conveyances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confiscated_forest_products`
--
ALTER TABLE `confiscated_forest_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confiscated_implements_equipment`
--
ALTER TABLE `confiscated_implements_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confiscated_rattan_poles`
--
ALTER TABLE `confiscated_rattan_poles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `critical_watersheds`
--
ALTER TABLE `critical_watersheds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `csc_issued`
--
ALTER TABLE `csc_issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csc_outside_cbfma`
--
ALTER TABLE `csc_outside_cbfma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `csc_within_cbfma`
--
ALTER TABLE `csc_within_cbfma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_cfbma`
--
ALTER TABLE `existing_cfbma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_flgla`
--
ALTER TABLE `existing_flgla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_flgma`
--
ALTER TABLE `existing_flgma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_industrial_forest_management_area`
--
ALTER TABLE `existing_industrial_forest_management_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_protection_area_community_brma`
--
ALTER TABLE `existing_protection_area_community_brma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_sifma`
--
ALTER TABLE `existing_sifma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_slup`
--
ALTER TABLE `existing_slup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `existing_tfla`
--
ALTER TABLE `existing_tfla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fireline_maintained`
--
ALTER TABLE `fireline_maintained`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forest_cover`
--
ALTER TABLE `forest_cover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forest_land_upfa`
--
ALTER TABLE `forest_land_upfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forest_protection_officers_peo`
--
ALTER TABLE `forest_protection_officers_peo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inregrated_watershed_management_plan_prepared`
--
ALTER TABLE `inregrated_watershed_management_plan_prepared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inremp_natural_resource_management_area_developed`
--
ALTER TABLE `inremp_natural_resource_management_area_developed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_of_cwr_monitored`
--
ALTER TABLE `inventory_of_cwr_monitored`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_biodiversity_areas`
--
ALTER TABLE `key_biodiversity_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land_classification_and_distribution`
--
ALTER TABLE `land_classification_and_distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land_disposition_issued`
--
ALTER TABLE `land_disposition_issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_of_checkpoint`
--
ALTER TABLE `list_of_checkpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major_river_basins`
--
ALTER TABLE `major_river_basins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_of_foreshore_areas_processed_and_endorsed`
--
ALTER TABLE `management_of_foreshore_areas_processed_and_endorsed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngp_area_planted`
--
ALTER TABLE `ngp_area_planted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngp_number_of_polygons`
--
ALTER TABLE `ngp_number_of_polygons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngp_seedlings_planted_by_commodity`
--
ALTER TABLE `ngp_seedlings_planted_by_commodity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngp_seedling_planted`
--
ALTER TABLE `ngp_seedling_planted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngp_seedling_production`
--
ALTER TABLE `ngp_seedling_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngp_survival_rate_percentage`
--
ALTER TABLE `ngp_survival_rate_percentage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngp_validated_project_sites`
--
ALTER TABLE `ngp_validated_project_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nipas_and_locally_managed_marine_protected_areas`
--
ALTER TABLE `nipas_and_locally_managed_marine_protected_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `number_of_forest_ranger`
--
ALTER TABLE `number_of_forest_ranger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `number_of_incidents_on_apprehended`
--
ALTER TABLE `number_of_incidents_on_apprehended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `number_of_waterbodies`
--
ALTER TABLE `number_of_waterbodies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proclaimed_propected_areas_under`
--
ALTER TABLE `proclaimed_propected_areas_under`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proclaimed_protected_areas_under_nipas`
--
ALTER TABLE `proclaimed_protected_areas_under_nipas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status_of_community_resource_management_framework`
--
ALTER TABLE `status_of_community_resource_management_framework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summary_of_cwr_monitored`
--
ALTER TABLE `summary_of_cwr_monitored`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `summary_of_forest_land_use_plan_formulation_and_adoption`
--
ALTER TABLE `summary_of_forest_land_use_plan_formulation_and_adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summary_of_watershed_characterization`
--
ALTER TABLE `summary_of_watershed_characterization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenurial_instruments`
--
ALTER TABLE `tenurial_instruments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watershed_characterization_profiling`
--
ALTER TABLE `watershed_characterization_profiling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watershed_forest_reserve_proclaimed_watershed`
--
ALTER TABLE `watershed_forest_reserve_proclaimed_watershed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watershed_supporting_river_irrigation_system_of_nia`
--
ALTER TABLE `watershed_supporting_river_irrigation_system_of_nia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watershed_vulnerability_assessment`
--
ALTER TABLE `watershed_vulnerability_assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
