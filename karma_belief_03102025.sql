-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2025 at 03:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karma_belief`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_inquiry`
--

CREATE TABLE `about_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_inquiry`
--

INSERT INTO `about_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Let\'s Do Something Amazing Together!!', 'Get Started with us', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=vibrant_db&table=about_inquiry', 'Ready to elevate your online presence? Get in touch with us today for personalized solutions tailored to your business needs.', '2025-07-24 05:53:31', '2025-07-30 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_display` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `title`, `description`, `status`, `is_display`, `created_at`, `updated_at`) VALUES
(5, 'Donation Policy', '<p>Policy or&nbsp;<a class=\"mw-redirect\" title=\"Policy study\" href=\"https://en.wikipedia.org/wiki/Policy_study\">policy study</a>&nbsp;may also refer to the process of making important organizational decisions, including the identification of different alternatives such as programs or spending priorities, and choosing among them on the basis of the impact they will have. Policies can be understood as political,&nbsp;<a title=\"Management\" href=\"https://en.wikipedia.org/wiki/Management\">managerial</a>, financial, and administrative mechanisms arranged to reach explicit goals. In public corporate finance, a&nbsp;<a title=\"Critical accounting policy\" href=\"https://en.wikipedia.org/wiki/Critical_accounting_policy\">critical accounting policy</a>&nbsp;is a policy for a firm or company or an industry that is considered to have a notably high subjective element, and that has a material impact on the&nbsp;<a title=\"Financial statement\" href=\"https://en.wikipedia.org/wiki/Financial_statement\">financial statements</a>.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (September 2011)\">citation needed</span></a></em>]</sup></p>\r\n<p>It has been argued that policies ought to be evidence-based. An individual or organization is justified in claiming that a specific policy is evidence-based if, and only if, three conditions are met. First, the individual or organization possesses comparative evidence about the effects of the specific policy in comparison to the effects of at least one alternative policy. Second, the specific policy is supported by this evidence according to at least one of the individual\'s or organization\'s preferences in the given policy area. Third, the individual or organization can provide a sound account for this support by explaining the evidence and preferences that lay the foundation for the claim.<sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-3\"><span class=\"cite-bracket\">[</span>3<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Policies are dynamic; they are not just static lists of goals or laws. Policy blueprints have to be implemented, often with unexpected results. Social policies are what happens \'on the ground\' when they are implemented, as well as what happens at the decision making or&nbsp;<a class=\"mw-redirect\" title=\"Legislative\" href=\"https://en.wikipedia.org/wiki/Legislative\">legislative</a>&nbsp;stage.<sup id=\"cite_ref-:0_4-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-:0-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>When the term policy is used, it may also refer to:<sup id=\"cite_ref-:0_4-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-:0-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<ul>\r\n<li>Official government policy (legislation or guidelines that govern how laws should be put into operation)</li>\r\n<li>Broad ideas and goals in political manifestos and pamphlets</li>\r\n<li>A company or organization\'s policy on a particular topic. For example, the equal opportunity policy of a company shows that the company aims to treat all its staff equally.</li>\r\n</ul>\r\n<p>The actions an organization actually takes may often vary significantly from its stated policy. This difference is sometimes caused by&nbsp;<a title=\"Horse trading\" href=\"https://en.wikipedia.org/wiki/Horse_trading\">political compromise</a>&nbsp;over policy, while in other situations it is caused by lack of policy implementation and enforcement. Implementing policy may have unexpected results, stemming from a policy whose reach extends further than the problem it was originally crafted to address. Additionally, unpredictable results may arise from selective or idiosyncratic enforcement of policy.<sup id=\"cite_ref-:0_4-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-:0-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Effects\">Effects</h2>\r\n</div>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Intended_effects_and_policy-design\">Intended effects and policy-design</h3>\r\n</div>\r\n<p>The intended effects of a policy vary widely according to the organization and the context in which they are made. Broadly, policies are typically instituted to avoid some negative effect that has been noticed in the organization, or to seek some positive benefit.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (September 2011)\">citation needed</span></a></em>]</sup>&nbsp;A way to extract the stated aims of a public policy is to analyze the goals embedded in the legislation that establishes it.<sup id=\"cite_ref-5\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-5\"><span class=\"cite-bracket\">[</span>5<span class=\"cite-bracket\">]</span></a></sup>&nbsp;This approach helps clarify the explicit intentions behind a policy and provides a normative foundation for evaluating its effectiveness in practice.</p>\r\n<p>A&nbsp;<a title=\"Meta-analysis\" href=\"https://en.wikipedia.org/wiki/Meta-analysis\">meta-analysis</a>&nbsp;of&nbsp;<a title=\"Policy studies\" href=\"https://en.wikipedia.org/wiki/Policy_studies\">policy studies</a>&nbsp;concluded that&nbsp;<a class=\"mw-redirect\" title=\"International treaties\" href=\"https://en.wikipedia.org/wiki/International_treaties\">international treaties</a>&nbsp;that aim to foster&nbsp;<a title=\"Global governance\" href=\"https://en.wikipedia.org/wiki/Global_governance\">global cooperation</a>&nbsp;have mostly failed to produce their&nbsp;<a title=\"Goal\" href=\"https://en.wikipedia.org/wiki/Goal\">intended effects</a>&nbsp;in addressing&nbsp;<a class=\"mw-redirect\" title=\"Global issue\" href=\"https://en.wikipedia.org/wiki/Global_issue\">global challenges</a>, and sometimes may have led to unintended harmful or net negative effects. The study suggests&nbsp;<a title=\"Enforcement\" href=\"https://en.wikipedia.org/wiki/Enforcement#Enforcement_mechanisms\">enforcement mechanisms</a>&nbsp;are the \"only modifiable treaty design choice\" with the potential to improve the&nbsp;<a title=\"Effectiveness\" href=\"https://en.wikipedia.org/wiki/Effectiveness\">effectiveness</a>.<sup id=\"cite_ref-6\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-7\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-7\"><span class=\"cite-bracket\">[</span>7<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The State of&nbsp;<a title=\"California\" href=\"https://en.wikipedia.org/wiki/California\">California</a>&nbsp;provides an example of benefit-seeking policy. In recent years, the numbers of&nbsp;<a class=\"mw-redirect\" title=\"Hybrid cars\" href=\"https://en.wikipedia.org/wiki/Hybrid_cars\">hybrid cars</a>&nbsp;in California has increased dramatically, in part because of policy changes in&nbsp;<a title=\"Federal law\" href=\"https://en.wikipedia.org/wiki/Federal_law\">Federal law</a>&nbsp;that provided USD $1,500 in tax credits (since phased out) and enabled the use of&nbsp;<a class=\"mw-redirect\" title=\"HOV\" href=\"https://en.wikipedia.org/wiki/HOV\">high-occupancy vehicle</a>&nbsp;lanes to drivers of hybrid vehicles. In this case, the organization (state or federal government) created an effect (increased ownership and use of hybrid vehicles) through policy (tax breaks, highway lanes).<sup id=\"cite_ref-8\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-8\"><span class=\"cite-bracket\">[</span>8<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Unintended\">Unintended</h3>\r\n</div>\r\n<p>Policies frequently have side effects or&nbsp;<a title=\"Unintended consequences\" href=\"https://en.wikipedia.org/wiki/Unintended_consequences\">unintended consequences</a>. Because the environments that policies seek to influence or manipulate are typically&nbsp;<a class=\"mw-redirect\" title=\"Complex adaptive systems\" href=\"https://en.wikipedia.org/wiki/Complex_adaptive_systems\">complex adaptive systems</a>&nbsp;(e.g. governments, societies, large companies), making a policy change can have&nbsp;<a class=\"mw-redirect\" title=\"Counterintuitive\" href=\"https://en.wikipedia.org/wiki/Counterintuitive\">counterintuitive</a>&nbsp;results. For example, a government may make a policy decision to raise taxes, in hopes of increasing overall tax revenue. Depending on the size of the tax increase, this may have the overall effect of reducing tax revenue by causing&nbsp;<a title=\"Capital flight\" href=\"https://en.wikipedia.org/wiki/Capital_flight\">capital flight</a>&nbsp;or by creating a rate so high that citizens are deterred from earning the money that is taxed.<sup id=\"cite_ref-9\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-9\"><span class=\"cite-bracket\">[</span>a<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-10\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-10\"><span class=\"cite-bracket\">[</span>9<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The policy formulation process theoretically includes an attempt to assess as many areas of potential policy impact as possible, to lessen the chances that a given policy will have unexpected or unintended consequences.<sup id=\"cite_ref-11\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-11\"><span class=\"cite-bracket\">[</span>10<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Cycle\">Cycle</h2>\r\n</div>\r\n<figure><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Policycycle.png\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Policycycle.png/500px-Policycycle.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Policycycle.png/600px-Policycycle.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/60/Policycycle.png/800px-Policycycle.png 2x\" width=\"400\" height=\"375\" data-file-width=\"919\" data-file-height=\"861\"></a>\r\n<figcaption>Example of the policy cycle concept</figcaption>\r\n</figure>\r\n<p>In&nbsp;<a title=\"Political science\" href=\"https://en.wikipedia.org/wiki/Political_science\">political science</a>, the&nbsp;<strong>policy cycle</strong>&nbsp;is a tool commonly used for analyzing the development of a policy. It can also be referred to as a \"stages model\" or \"stages heuristic\". It is thus a rule of thumb rather than the actual reality of how policy is created, but has been influential in how&nbsp;<a title=\"Political science\" href=\"https://en.wikipedia.org/wiki/Political_science\">political scientists</a>&nbsp;looked at policy in general.<sup id=\"cite_ref-FOOTNOTENakamura1987_12-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-FOOTNOTENakamura1987-12\"><span class=\"cite-bracket\">[</span>11<span class=\"cite-bracket\">]</span></a></sup>&nbsp;It was developed as a theory from&nbsp;<a title=\"Harold Lasswell\" href=\"https://en.wikipedia.org/wiki/Harold_Lasswell\">Harold Lasswell</a>\'s work. It is called the policy cycle as the final stage (evaluation) often leads back to the first stage (problem definition), thus restarting the cycle.</p>\r\n<p><a title=\"Harold Lasswell\" href=\"https://en.wikipedia.org/wiki/Harold_Lasswell\">Harold Lasswell</a>\'s popular model of the policy cycle divided the process into seven distinct stages, asking questions of both how and why public policies should be made.<sup id=\"cite_ref-13\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-13\"><span class=\"cite-bracket\">[</span>12<span class=\"cite-bracket\">]</span></a></sup>&nbsp;With the stages ranging from (1) intelligence, (2) promotion, (3) prescription, (4) invocation, (5) application, (6) termination and (7) appraisal, this process inherently attempts to combine policy implementation to formulated policy goals.<sup id=\"cite_ref-14\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-14\"><span class=\"cite-bracket\">[</span>13<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>One version by James E. Anderson, in his&nbsp;<em>Public Policy-Making</em>&nbsp;(1974) has the following stages:</p>\r\n<ol>\r\n<li><a title=\"Political agenda\" href=\"https://en.wikipedia.org/wiki/Political_agenda\">Agenda</a>&nbsp;setting (Problem identification) &ndash; The recognition of certain subject as a problem demanding further government attention.</li>\r\n<li>Policy formulation &ndash; Involves exploring a variation of options or alternative courses of action available for addressing the problem. (appraisal, dialogue, formulation, and consolidation)</li>\r\n<li>Decision-making &ndash; Government decides on an ultimate course of action, whether to perpetuate the policy status quo or alter it. (Decision could be \'positive\', \'negative\', or \'no-action\')</li>\r\n<li><a title=\"Implementation\" href=\"https://en.wikipedia.org/wiki/Implementation\">Implementation</a>&nbsp;&ndash; The ultimate decision made earlier will be put into practice.</li>\r\n<li><a title=\"Evaluation\" href=\"https://en.wikipedia.org/wiki/Evaluation\">Evaluation</a>&nbsp;&ndash; Assesses the effectiveness of a public policy in terms of its perceived intentions and results.&nbsp;<a class=\"mw-redirect\" title=\"Actor (policy debate)\" href=\"https://en.wikipedia.org/wiki/Actor_(policy_debate)\">Policy actors</a>&nbsp;attempt to determine whether the course of action is a success or failure by examining its impact and outcomes.</li>\r\n</ol>\r\n<p>Anderson\'s version of the stages model is the most common and widely recognized out of the models. However, it could also be seen as flawed. According to Paul A. Sabatier, the model has \"outlived its usefulness\" and should be replaced.<sup id=\"cite_ref-15\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-15\"><span class=\"cite-bracket\">[</span>14<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The model\'s issues have led to a&nbsp;<a title=\"Paradox\" href=\"https://en.wikipedia.org/wiki/Paradox\">paradoxical</a>&nbsp;situation in which current research and updated versions of the model continue to rely on the framework created by Anderson. But the very concept of the stages model has been discredited, which attacks the cycle\'s status as a heuristic.<sup id=\"cite_ref-16\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-16\"><span class=\"cite-bracket\">[</span>15<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Due to these problems, alternative and newer versions of the model have aimed to create a more comprehensive view of the policy cycle. An eight step policy cycle is developed in detail in&nbsp;<em>The Australian Policy Handbook</em>&nbsp;by Peter Bridgman and&nbsp;<a title=\"Glyn Davis\" href=\"https://en.wikipedia.org/wiki/Glyn_Davis\">Glyn Davis</a>: (now with Catherine Althaus in its 4th and 5th editions)</p>\r\n<ol>\r\n<li>Issue identification</li>\r\n<li><a title=\"Policy analysis\" href=\"https://en.wikipedia.org/wiki/Policy_analysis\">Policy analysis</a></li>\r\n<li><a title=\"Public consultation\" href=\"https://en.wikipedia.org/wiki/Public_consultation\">Consultation</a>&nbsp;(which permeates the entire process)</li>\r\n<li>Policy instrument development</li>\r\n<li>Building coordination and coalitions</li>\r\n<li>Program Design:&nbsp;<a title=\"Decision theory\" href=\"https://en.wikipedia.org/wiki/Decision_theory\">Decision</a>&nbsp;making</li>\r\n<li>Policy&nbsp;<a title=\"Implementation\" href=\"https://en.wikipedia.org/wiki/Implementation\">Implementation</a></li>\r\n<li>Policy&nbsp;<a title=\"Evaluation\" href=\"https://en.wikipedia.org/wiki/Evaluation\">Evaluation</a></li>\r\n</ol>\r\n<p>The Althaus, Bridgman &amp; Davis model is&nbsp;<a title=\"Heuristic\" href=\"https://en.wikipedia.org/wiki/Heuristic\">heuristic</a>&nbsp;and&nbsp;<a class=\"mw-redirect\" title=\"Iterative\" href=\"https://en.wikipedia.org/wiki/Iterative\">iterative</a>. It is&nbsp;<span class=\"cleanup-needed-content\">intentionally&nbsp;<a title=\"Norm (philosophy)\" href=\"https://en.wikipedia.org/wiki/Norm_(philosophy)\">normative</a></span><sup class=\"noprint Inline-Template\">[<em><a title=\"Wikipedia:Please clarify\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Please_clarify\"><span title=\"The text near this tag may need clarification or removal of jargon. (February 2016)\">clarification needed</span></a></em>]</sup>&nbsp;and not meant to be&nbsp;<span class=\"cleanup-needed-content\"><a title=\"Organizational diagnostics\" href=\"https://en.wikipedia.org/wiki/Organizational_diagnostics\">diagnostic</a></span><sup class=\"noprint Inline-Template\">[<em><a title=\"Wikipedia:Please clarify\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Please_clarify\"><span title=\"The text near this tag may need clarification or removal of jargon. (February 2016)\">clarification needed</span></a></em>]</sup>&nbsp;or&nbsp;<a class=\"mw-redirect\" title=\"Predictive\" href=\"https://en.wikipedia.org/wiki/Predictive\">predictive</a>. Policy cycles are typically characterized as adopting a classical approach, and tend to describe processes from the perspective of policy decision makers. Accordingly, some&nbsp;<a title=\"Postpositivism\" href=\"https://en.wikipedia.org/wiki/Postpositivism\">post-positivist</a>&nbsp;academics challenge cyclical models as unresponsive and unrealistic, preferring systemic and more complex models.<sup id=\"cite_ref-17\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Policy#cite_note-17\"><span class=\"cite-bracket\">[</span>16<span class=\"cite-bracket\">]</span></a></sup>&nbsp;They consider a broader range of actors involved in the policy space that includes&nbsp;<a title=\"Voluntary sector\" href=\"https://en.wikipedia.org/wiki/Voluntary_sector\">civil society organizations</a>, the&nbsp;<a title=\"Mass media\" href=\"https://en.wikipedia.org/wiki/Mass_media\">media</a>,&nbsp;<a class=\"mw-redirect\" title=\"Intellectuals\" href=\"https://en.wikipedia.org/wiki/Intellectuals\">intellectuals</a>,&nbsp;<a class=\"mw-redirect\" title=\"Think tanks\" href=\"https://en.wikipedia.org/wiki/Think_tanks\">think tanks</a>&nbsp;or policy&nbsp;<a class=\"mw-redirect\" title=\"Research institutes\" href=\"https://en.wikipedia.org/wiki/Research_institutes\">research institutes</a>, corporations,&nbsp;<a title=\"Advocacy group\" href=\"https://en.wikipedia.org/wiki/Advocacy_group\">lobbyists</a>, etc.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Content\">Content</h2>\r\n</div>\r\n<table class=\"box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced\" role=\"presentation\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mbox-image\">\r\n<div class=\"mbox-image-div\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Question_book-new.svg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/60px-Question_book-new.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/en/thumb/9/99/Question_book-new.svg/120px-Question_book-new.svg.png 1.5x\" alt=\"\" width=\"50\" height=\"39\" data-file-width=\"512\" data-file-height=\"399\"></a></div>\r\n</td>\r\n<td class=\"mbox-text\">\r\n<div class=\"mbox-text-span\">This section&nbsp;<strong>does not&nbsp;<a title=\"Wikipedia:Citing sources\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citing_sources\">cite</a>&nbsp;any&nbsp;<a title=\"Wikipedia:Verifiability\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Verifiability\">sources</a></strong>.<span class=\"hide-when-compact\">&nbsp;Please help&nbsp;<a title=\"Special:EditPage/Policy\" href=\"https://en.wikipedia.org/wiki/Special:EditPage/Policy\">improve this section</a>&nbsp;by&nbsp;<a title=\"Help:Referencing for beginners\" href=\"https://en.wikipedia.org/wiki/Help:Referencing_for_beginners\">adding citations to reliable sources</a>. Unsourced material may be challenged and&nbsp;<a title=\"Wikipedia:Verifiability\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Verifiability#Burden_of_evidence\">removed</a>.</span>&nbsp;<span class=\"date-container\"><em>(<span class=\"date\">June 2023</span>)</em></span><span class=\"hide-when-compact\"><em>&nbsp;(<small><a title=\"Help:Maintenance template removal\" href=\"https://en.wikipedia.org/wiki/Help:Maintenance_template_removal\">Learn how and when to remove this message</a></small>)</em></span></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Policies are typically&nbsp;<a title=\"Promulgation\" href=\"https://en.wikipedia.org/wiki/Promulgation\">promulgated</a>&nbsp;through official written documents. Policy documents often come with the endorsement or signature of the executive powers within an organization to legitimize the policy and demonstrate that it is considered in force. Such documents often have standard formats that are particular to the organization issuing the policy. While such formats differ in form, policy documents usually contain certain standard components including:</p>\r\n<ul>\r\n<li>A&nbsp;<em>purpose statement</em>, outlining why the organization is issuing the policy, and what its desired effect or outcome of the policy should be.</li>\r\n<li>An&nbsp;<em>applicability and scope</em>&nbsp;statement, describing who the policy affects and which actions are impacted by the policy. The applicability and scope may expressly exclude certain people, organizations, or actions from the policy requirements. Applicability and scope is used to focus the policy on only the desired targets, and avoid unintended consequences where possible.</li>\r\n<li>An&nbsp;<em>effective date</em>&nbsp;which indicates when the policy comes into force.&nbsp;<a title=\"Ex post facto law\" href=\"https://en.wikipedia.org/wiki/Ex_post_facto_law\">Retroactive policies</a>&nbsp;are rare, but can be found.</li>\r\n<li>A&nbsp;<em>responsibilities</em>&nbsp;section, indicating which parties and organizations are responsible for carrying out individual policy statements. Many policies may require the establishment of some ongoing function or action. For example, a purchasing policy might specify that a purchasing office be created to process purchase requests, and that this office would be responsible for ongoing actions. Responsibilities often include identification of any relevant&nbsp;<a title=\"Regulation\" href=\"https://en.wikipedia.org/wiki/Regulation\">oversight</a>&nbsp;and/or&nbsp;<a title=\"Governance\" href=\"https://en.wikipedia.org/wiki/Governance\">governance</a>&nbsp;structures.</li>\r\n<li><em>Policy statements</em>&nbsp;indicating the specific regulations, requirements, or modifications to organizational behavior that the policy is creating. Policy statements are extremely diverse depending on the organization and intent, and may take almost any form.</li>\r\n</ul>\r\n<p>Some policies may contain additional sections, including:</p>\r\n<ul>\r\n<li><em>Background</em>, indicating any reasons, history, ethical background statements, and/or intent that led to the creation of the policy, which may be listed as&nbsp;<em>motivating factors</em>. This information is often quite valuable when policies must be evaluated or used in ambiguous situations, just as the intent of a law can be useful to a court when deciding a case that involves that law.</li>\r\n<li><em>Definitions</em>, providing clear and unambiguous definitions for terms and concepts found in the policy document.</li>\r\n</ul>', '1', 'donation_policy', '2025-09-23 01:54:43', '2025-09-23 01:54:43');
INSERT INTO `about_pages` (`id`, `title`, `description`, `status`, `is_display`, `created_at`, `updated_at`) VALUES
(6, 'Tex Exemption', '<p><strong>Tax exemption</strong>&nbsp;is the reduction or removal of a liability to make a compulsory payment that would otherwise be imposed by a ruling power upon persons, property, income, or transactions. Tax-exempt status may provide complete relief from taxes, reduced rates, or tax on only a portion of items. Examples include exemption of&nbsp;<a class=\"mw-redirect\" title=\"Charitable organizations\" href=\"https://en.wikipedia.org/wiki/Charitable_organizations\">charitable organizations</a>&nbsp;from&nbsp;<a class=\"mw-redirect\" title=\"Property taxes\" href=\"https://en.wikipedia.org/wiki/Property_taxes\">property taxes</a>&nbsp;and&nbsp;<a class=\"mw-redirect\" title=\"Income taxes\" href=\"https://en.wikipedia.org/wiki/Income_taxes\">income taxes</a>, veterans, and certain cross-border or multi-jurisdictional scenarios.</p>\r\n<p>A tax exemption is distinct and different from a&nbsp;<a class=\"mw-selflink-fragment\" href=\"https://en.wikipedia.org/wiki/Tax_exemption#Tax_exclusion\">tax exclusion</a>&nbsp;and a tax deduction, all of which are different types of tax expenditures.<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-1\"><span class=\"cite-bracket\">[</span>1<span class=\"cite-bracket\">]</span></a></sup>&nbsp;A tax exemption is an income stream on which no tax is levied, such as interest income from state and local bonds, which is often exempt from federal income tax. Additionally, certain qualifying non-profit organizations are exempt from federal income tax.<sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-2\"><span class=\"cite-bracket\">[</span>2<span class=\"cite-bracket\">]</span></a></sup>&nbsp;A tax exclusion refers to a dollar amount (or proportion of taxable income) that can be legally excluded from the taxable base income prior to assessment of tax, such as the $250,000/$500,000 home sale tax exclusion in the U.S.<sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-3\"><span class=\"cite-bracket\">[</span>3<span class=\"cite-bracket\">]</span></a></sup>&nbsp;A tax deduction is a documented amount subtracted from the adjusted gross income to compute taxable income, such as charitable contributions.<sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-5\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-5\"><span class=\"cite-bracket\">[</span>5<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>International&nbsp;<strong>duty free</strong>&nbsp;shopping may be termed \"tax-free shopping\". In tax-free shopping, the goods are permanently taken outside the jurisdiction, thus paying taxes is not necessary. Tax-free shopping is also found in ships, airplanes and other vessels traveling between countries (or tax areas). Tax-free shopping is usually available in dedicated&nbsp;<a title=\"Duty-free shop\" href=\"https://en.wikipedia.org/wiki/Duty-free_shop\">duty-free shops</a>. In such a scenario, a sum equivalent to the tax is paid, but reimbursed on exit. More common in Europe, tax-free is less frequent in the United States, with the exception of Louisiana. However, current&nbsp;<a title=\"European Union\" href=\"https://en.wikipedia.org/wiki/European_Union\">European Union</a>&nbsp;rules prohibit most intra-EU tax-free trade, with the exception of certain&nbsp;<a class=\"mw-redirect\" title=\"Special member state territories and the European Union\" href=\"https://en.wikipedia.org/wiki/Special_member_state_territories_and_the_European_Union\">special territories</a>&nbsp;outside the tax area.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Specific_monetary_exemptions\">Specific monetary exemptions</h2>\r\n</div>\r\n<p>Some jurisdictions allow for a specific monetary reduction of the tax base, which may be referred to as an exemption. For example, the U.S. Federal and many state tax systems allow a deduction of a specified dollar amount for each of several categories of \"personal exemptions\". Similar amounts may be called \"personal allowances\". Some systems may provide thresholds at which such exemptions or allowances are phased out or removed.<sup id=\"cite_ref-6\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Exempt_organizations\">Exempt organizations</h2>\r\n</div>\r\n<p>Some governments grant broad exclusions from all taxation for certain types of organization. The exclusions may be restricted to entities having various characteristics. The exclusions may be inherent in definitions or restrictions outside the tax law itself.<sup id=\"cite_ref-7\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-7\"><span class=\"cite-bracket\">[</span>7<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Approaches_for_exemption\">Approaches for exemption</h3>\r\n</div>\r\n<p>There are several different approaches used in granting exemption to organizations. Different approaches may be used within a jurisdiction or especially within sub-jurisdictions.</p>\r\n<p>Some jurisdictions grant an overall exemption from taxation to organizations meeting certain definitions. The United Kingdom, for example, provides an exemption from rates (property taxes), and income taxes for entities governed by the Charities Law. This overall exemption may be somewhat limited by limited scope for taxation by the jurisdiction. Some jurisdictions may levy only a single type of tax, exemption from only a particular tax.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (July 2010)\">citation needed</span></a></em>]</sup></p>\r\n<p>Some jurisdictions provide for exemption only from certain taxes. The United States exempts certain organizations from Federal income taxes,<sup id=\"cite_ref-8\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-8\"><span class=\"cite-bracket\">[</span>8<span class=\"cite-bracket\">]</span></a></sup>&nbsp;but not from various excise or most employment taxes.<sup id=\"cite_ref-9\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-9\"><span class=\"cite-bracket\">[</span>9<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Charitable,_nonprofit_and_religious_organizations\"><span id=\"Charitable.2C_nonprofit_and_religious_organizations\"></span>Charitable, nonprofit and religious organizations</h3>\r\n</div>\r\n<p>Many tax systems provide complete exemption from tax for recognized charitable or&nbsp;<a title=\"Nonprofit organization\" href=\"https://en.wikipedia.org/wiki/Nonprofit_organization\">nonprofit organizations</a>. Such organizations may include religious organizations (temples, mosques, churches, etc.), fraternal organizations (including social clubs), public charities (e.g., organizations serving homeless persons), or any of a broad variety of organizations considered to serve public purposes.</p>\r\n<p>The U.S. system exempts from Federal and many state income taxes<sup id=\"cite_ref-10\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-10\"><span class=\"cite-bracket\">[</span>10<span class=\"cite-bracket\">]</span></a></sup>&nbsp;the income of organizations that have qualified for such exemption. Qualification requires that the organization be created and operated for one of a long list of tax-exempt purposes,<sup id=\"cite_ref-11\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-11\"><span class=\"cite-bracket\">[</span>11<span class=\"cite-bracket\">]</span></a></sup>&nbsp;which includes more than 28 types of organizations and also requires, for most types of organizations, that the organization apply for tax-exempt status with the Internal Revenue Service,<sup id=\"cite_ref-12\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-12\"><span class=\"cite-bracket\">[</span>12<span class=\"cite-bracket\">]</span></a></sup>&nbsp;or be a religious or apostolic organization.<sup id=\"cite_ref-13\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-13\"><span class=\"cite-bracket\">[</span>13<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-14\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-14\"><span class=\"cite-bracket\">[</span>14<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The U.S. system does not distinguish between various kinds of tax-exempt entities (such as educational versus charitable) for purposes of granting exemption, but does make such distinctions with respect to allowing a&nbsp;<a title=\"Tax deduction\" href=\"https://en.wikipedia.org/wiki/Tax_deduction\">tax deduction</a>&nbsp;for contributions.<sup id=\"cite_ref-15\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-15\"><span class=\"cite-bracket\">[</span>15<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The UK generally exempts public charities from&nbsp;<a class=\"mw-redirect\" title=\"Business rates\" href=\"https://en.wikipedia.org/wiki/Business_rates\">business rates</a>, corporation tax, income tax, and certain other taxes.<sup id=\"cite_ref-16\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-16\"><span class=\"cite-bracket\">[</span>16<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Tax exemption status of nonprofit organizations can in some cases result in&nbsp;<a title=\"Financial mismanagement\" href=\"https://en.wikipedia.org/wiki/Financial_mismanagement\">financial mismanagement</a>&nbsp;and negative societal value.<sup id=\"cite_ref-o561_17-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-o561-17\"><span class=\"cite-bracket\">[</span>17<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Governmental_entities\">Governmental entities</h3>\r\n</div>\r\n<p>Most systems exempt internal governmental units from all tax. For multi-tier jurisdictions, this exemption generally extends to lower tier units and across units. For example, state and local governments are not subject to Federal, state, or local income taxes in the U.S.<sup id=\"cite_ref-18\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-18\"><span class=\"cite-bracket\">[</span>18<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Pension_schemes\">Pension schemes</h3>\r\n</div>\r\n<p>Most systems do not tax entities organized to conduct retirement investment and pension activities for employees of one or more employers or for the benefit of employees.<sup id=\"cite_ref-19\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-19\"><span class=\"cite-bracket\">[</span>19<span class=\"cite-bracket\">]</span></a></sup>&nbsp;In addition, many systems also provide tax exemption for&nbsp;<a title=\"Personal pension scheme\" href=\"https://en.wikipedia.org/wiki/Personal_pension_scheme\">personal pension schemes</a>.<sup id=\"cite_ref-20\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-20\"><span class=\"cite-bracket\">[</span>20<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Educational_institutions\">Educational institutions</h3>\r\n</div>\r\n<p>Some jurisdictions provide separate total or partial tax exemptions for educational institutions.<sup id=\"cite_ref-21\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-21\"><span class=\"cite-bracket\">[</span>21<span class=\"cite-bracket\">]</span></a></sup>&nbsp;These exemptions may be limited to certain functions or income.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Sales_tax\">Sales tax</h3>\r\n</div>\r\n<div class=\"hatnote navigation-not-searchable\" role=\"note\">See also:&nbsp;<a title=\"Sales taxes in the United States\" href=\"https://en.wikipedia.org/wiki/Sales_taxes_in_the_United_States\">sales taxes in the United States</a>,&nbsp;<a title=\"Tax-free shopping\" href=\"https://en.wikipedia.org/wiki/Tax-free_shopping\">tax-free shopping</a>, and&nbsp;<a title=\"Tax holiday\" href=\"https://en.wikipedia.org/wiki/Tax_holiday\">tax holiday</a></div>\r\n<p>Most states and localities imposing sales and use taxes in the United States exempt resellers from sales taxes on goods held for sale and ultimately sold. In addition, most such states and localities exempt from sales taxes goods used directly in the production of other goods (i.e., raw materials).</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Exempt_individuals\">Exempt individuals</h2>\r\n</div>\r\n<p>Certain classes of persons may be granted a full or partial tax exemption within a system. Common exemptions are for veterans,<sup id=\"cite_ref-22\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-22\"><span class=\"cite-bracket\">[</span>22<span class=\"cite-bracket\">]</span></a></sup>&nbsp;clergymen<sup id=\"cite_ref-23\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-23\"><span class=\"cite-bracket\">[</span>23<span class=\"cite-bracket\">]</span></a></sup>&nbsp;or taxpayers with children (who can take \"dependency exemption\" for each qualifying dependent who has lived with the taxpayer. The dependent can be a natural child, step-child, step-sibling, half-sibling, adopted child, eligible foster child, or grandchild, and is usually under age 19, a full-time student under age 24, or have special needs).<sup id=\"cite_ref-For_other_tax_breaks_when_raising_a_child_in_the_U.S._please_see_Presti_and_Naegele_Newsletter_24-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-For_other_tax_breaks_when_raising_a_child_in_the_U.S._please_see_Presti_and_Naegele_Newsletter-24\"><span class=\"cite-bracket\">[</span>24<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The exemption granted may depend on multiple criteria, including criteria otherwise unrelated to the particular tax. For example, a property tax exemption may be provided to certain classes of veterans earning less than a particular income level.<sup id=\"cite_ref-25\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-25\"><span class=\"cite-bracket\">[</span>25<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Definitions of exempt individuals tend to be complex.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Exempt_income\">Exempt income</h2>\r\n</div>\r\n<p>Most income tax systems exclude certain classes of income from the taxable income base. Such exclusions may be referred to as exclusions or exemptions. Systems vary highly.<sup id=\"cite_ref-26\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-26\"><span class=\"cite-bracket\">[</span>26<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Among the more commonly excluded items are:</p>\r\n<ul>\r\n<li>Income earned outside the taxing jurisdiction.<sup id=\"cite_ref-27\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-27\"><span class=\"cite-bracket\">[</span>27<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Such exclusions may be limited in amount.<sup id=\"cite_ref-28\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-28\"><span class=\"cite-bracket\">[</span>28<span class=\"cite-bracket\">]</span></a></sup></li>\r\n<li>Interest income earned from subsidiary jurisdictions.<sup id=\"cite_ref-29\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-29\"><span class=\"cite-bracket\">[</span>29<span class=\"cite-bracket\">]</span></a></sup></li>\r\n<li>Income consisting of compensation for loss.<sup id=\"cite_ref-30\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-30\"><span class=\"cite-bracket\">[</span>30<span class=\"cite-bracket\">]</span></a></sup></li>\r\n<li>The value of property inherited or acquired by gift.<sup id=\"cite_ref-31\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-31\"><span class=\"cite-bracket\">[</span>31<span class=\"cite-bracket\">]</span></a></sup></li>\r\n</ul>\r\n<p>Some tax systems specifically exclude from income items that the system is trying to encourage. Such exclusions or exemptions can be quite specific<sup id=\"cite_ref-32\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-32\"><span class=\"cite-bracket\">[</span>32<span class=\"cite-bracket\">]</span></a></sup>&nbsp;or very general.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (September 2011)\">citation needed</span></a></em>]</sup></p>\r\n<p>Among the types of income that may be included are classes of income earned in specific areas, such as special economic zones, enterprise zones, etc. These exemptions may be limited to specific industries. As an example, India provides SEZs where exporters of goods or providers of services to foreign customers may be exempt from income taxes and customs duties.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"ITA sections 10A and 10B? (September 2011)\">citation needed</span></a></em>]</sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Exempt_property\">Exempt property</h2>\r\n</div>\r\n<p>Certain types of property are commonly granted exemption from property or transaction (such as sales or value added) taxes. These exemptions vary highly from jurisdiction to jurisdiction, and definitions of what property qualifies for exemption can be voluminous.<sup id=\"cite_ref-33\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-33\"><span class=\"cite-bracket\">[</span>33<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Among the more commonly granted exemptions are:</p>\r\n<ul>\r\n<li>Property used in manufacture of other goods (which goods may ultimately be taxable)</li>\r\n<li>Property used by a tax exempt or other parties for a charitable or other not for profit purpose</li>\r\n<li>Property considered a necessity of life, often exempted from&nbsp;<a title=\"Sales taxes in the United States\" href=\"https://en.wikipedia.org/wiki/Sales_taxes_in_the_United_States\">sales taxes in the United States</a></li>\r\n<li>Personal residence of the taxpayer,<sup id=\"cite_ref-34\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-34\"><span class=\"cite-bracket\">[</span>34<span class=\"cite-bracket\">]</span></a></sup>&nbsp;often subject to specific monetary limitations</li>\r\n</ul>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Multi-tier_jurisdictions\">Multi-tier jurisdictions</h2>\r\n</div>\r\n<p>Many countries that impose tax have subdivisions or subsidiary jurisdictions that also impose tax. This feature is not unique to federal systems, like the U.S., Switzerland and Australia, but rather is a common feature of national systems.<sup id=\"cite_ref-35\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-35\"><span class=\"cite-bracket\">[</span>35<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The top tier system may impose restrictions on both the ability of the lower tier system to levy tax as well as how certain aspects of such lower tier system work, including the granting of tax exemptions. The restrictions may be imposed directly on the lower jurisdiction\'s power to levy tax or indirectly by regulating tax effects of the exemption at the upper tier.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Cross-border_agreements\">Cross-border agreements</h2>\r\n</div>\r\n<p>Jurisdictions may enter into agreements with other jurisdictions that provide for&nbsp;<a title=\"Double taxation\" href=\"https://en.wikipedia.org/wiki/Double_taxation#Double_taxation_relief\">double taxation relief</a>. Such provisions are common in an income&nbsp;<a title=\"Tax treaty\" href=\"https://en.wikipedia.org/wiki/Tax_treaty\">tax treaty</a>. These reciprocal tax exemptions typically call for each contracting jurisdiction to exempt certain income of a resident of the other contracting jurisdiction.</p>\r\n<p>Multi-jurisdictional agreements for tax exemption also exist. 20 of the U.S. states have entered into the Multistate Tax Compact that provides, among other things, that each member must grant a full credit for sales and use taxes paid to other states or subdivisions. The European Union members are all parties to the EU multi-country VAT harmonisation rules.<sup id=\"cite_ref-36\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-36\"><span class=\"cite-bracket\">[</span>36<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Diplomatic_tax_exemptions\">Diplomatic tax exemptions</h2>\r\n</div>\r\n<p>The US provides a few tax exemptions for their diplomatic mission visitors.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Sales_tax_exemption\">Sales tax exemption</h3>\r\n</div>\r\n<p>The Department\'s Office of Foreign Missions (OFM) issues diplomatic tax exemption cards to eligible foreign missions and their accredited members and dependents on the basis of international law and reciprocity.<sup id=\"cite_ref-37\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-37\"><span class=\"cite-bracket\">[</span>37<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>There are two types of diplomatic sales exemption cards. The mission tax exemption card is used by foreign missions to buy necessary items for the mission. This type of card work only while paying with a cheque, credit card, or wire transfer transaction and must be made in the name of the mission otherwise it is not eligible for the tax exemption. These cards may only be issued to a person, who is a principal member or an employee of the mission, holds an A or G visa, and is not a permanent resident of the US. The personal tax exemption card is issued to eligible foreign mission members for exemption on their personal item purchases. The user of this card is the only person who might use this card on his purchases and he is the only one who can profit from them.</p>\r\n<p>There are 4 levels of exemption cards, and each one holds a name after an animal:</p>\r\n<ul>\r\n<li>Owl: This card is for mission tax exemption with no restriction</li>\r\n<li>Buffalo: This card is for mission tax exemption with some degree of restriction</li>\r\n<li>Eagle: This card is for personal tax exemption with no restriction</li>\r\n<li>Deer: This card is for personal tax exemption with some degree of restriction</li>\r\n</ul>\r\n<p><sup id=\"cite_ref-38\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-38\"><span class=\"cite-bracket\">[</span>38<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Hotel_tax_exemption\">Hotel tax exemption</h3>\r\n</div>\r\n<p>This is a tax exemption issued for purchases of hotel stays and other forms of lodging. The tax exemption card is required before paying for the lodging, if it is paid before acquiring it, or through the internet, the benefits are unusable.</p>\r\n<div class=\"mw-heading mw-heading4\">\r\n<h4 id=\"Official_mission_tax_exemptions\">Official mission tax exemptions</h4>\r\n</div>\r\n<p>These exemptions might only be used for purchases necessary for the mission&rsquo;s functioning. The mission is only available to be exempt from tax if the mission has a valid tax exemption card, the stay is required in support of the mission&rsquo;s diplomatic or consular functions and the costs are paid with a cheque, credit card, or a wire transfer in the name of the mission.</p>\r\n<div class=\"mw-heading mw-heading4\">\r\n<h4 id=\"Personal_tax_exemption\">Personal tax exemption</h4>\r\n</div>\r\n<p>This card is issued only for the benefit of its holder and may not be used to benefit anyone else. The expenses are only exempt from tax if the person has a valid tax exemption card and the rooms are registered and paid only by the person holding the tax exemption card.&nbsp;<sup id=\"cite_ref-39\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-39\"><span class=\"cite-bracket\">[</span>39<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Other_exemptions\">Other exemptions</h3>\r\n</div>\r\n<p>Other exemptions in the US include those for vehicles,<sup id=\"cite_ref-40\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-40\"><span class=\"cite-bracket\">[</span>40<span class=\"cite-bracket\">]</span></a></sup>&nbsp;airlines,<sup id=\"cite_ref-41\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-41\"><span class=\"cite-bracket\">[</span>41<span class=\"cite-bracket\">]</span></a></sup>&nbsp;gasoline,<sup id=\"cite_ref-42\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-42\"><span class=\"cite-bracket\">[</span>42<span class=\"cite-bracket\">]</span></a></sup>&nbsp;utilities,<sup id=\"cite_ref-43\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-43\"><span class=\"cite-bracket\">[</span>43<span class=\"cite-bracket\">]</span></a></sup>&nbsp;and certain types of income.<sup id=\"cite_ref-44\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Tax_exemption#cite_note-44\"><span class=\"cite-bracket\">[</span>44<span class=\"cite-bracket\">]</span></a></sup></p>', '1', 'tex-exemption', '2025-09-23 01:59:45', '2025-09-23 01:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `about_technologies`
--

CREATE TABLE `about_technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `tag_line` varchar(255) DEFAULT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_technologies`
--

INSERT INTO `about_technologies` (`id`, `heading`, `tag_line`, `data`, `image`, `btn_label`, `btn_link`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'We are nonprofit team and work worldwide', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'about_technologies/LuvekH0Qtv2h34Iima0YIbqJFrFVdGIKu604ykHq.jpg', 'Get Started with us', 'http://127.0.0.1:8000/about-us', '1', '2025-07-22 01:39:04', '2025-09-15 20:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_counter_`
--

CREATE TABLE `about_us_counter_` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_heading` varchar(255) DEFAULT NULL,
  `counters` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_counter_`
--

INSERT INTO `about_us_counter_` (`id`, `main_heading`, `counters`, `created_at`, `updated_at`) VALUES
(1, 'We Take Your Ideas And Make Them Happen', '[{\"title\":\"Distribution of Wheel Chairs\",\"value\":\"277,067\",\"city\":\"India\"},{\"title\":\"Service of Patients Meals\",\"value\":\"39,289,042\",\"city\":\"Gujarat\"},{\"title\":\"Distribution of Clothes\",\"value\":\"2,575\",\"city\":\"India\"},{\"title\":\"Blanket Distribution\",\"value\":\"192,000\",\"city\":\"India\"},{\"title\":\"Distribution of Crutches\",\"value\":\"301,304\",\"city\":\"India\"},{\"title\":\"Distribution of Calipers\",\"value\":\"366,961\",\"city\":\"India\"},{\"title\":\"Corrective Surgeries\",\"value\":\"429,917\",\"city\":\"India\"},{\"title\":\"Distribution of TriCycles\",\"value\":\"265,863\",\"city\":\"India\"}]', '2025-07-22 06:37:27', '2025-09-19 21:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_mission_vission`
--

CREATE TABLE `about_us_mission_vission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_1` varchar(255) DEFAULT NULL,
  `heading_2` varchar(255) DEFAULT NULL,
  `description_1` text DEFAULT NULL,
  `description_2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_mission_vission`
--

INSERT INTO `about_us_mission_vission` (`id`, `heading_1`, `heading_2`, `description_1`, `description_2`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'Our Vision', 'We are dedicated to providing a wide range of services that satisfy our customers\' business demands at reasonable pricing. Our company strategy is to recognize, comprehend, and satisfy our clients\' needs. Maintain client relationships by acting as a trusted partner and assisting customers in resolving issues with the application. Maintain a positive work atmosphere that encourages, recognizes, and rewards top performers. Maintain a work atmosphere that promotes personal and professional development and long-term customer loyalty.', 'In an oncoming era of technology, to create an environment that denotes IT abundance, with innovative and stylish web development, mobile app development, software devlopment, and cloud solutions.', '2025-07-22 05:55:23', '2025-07-22 05:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_gallery`
--

CREATE TABLE `aiml_home_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_title` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_gallery`
--

INSERT INTO `aiml_home_gallery` (`id`, `tag_title`, `header`, `description`, `data`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'OurCorefeatures', 'Predictive Analytics:', 'Predictive Analytics: How We Helped E-commerce Giant Boost Sales by 45%\r\nView Case Study \r\nimage\r\nComputer Vision\r\nAI\r\nImplementing Smart Quality Control: Manufacturing Defect Detection System\r\nView Case Study \r\nimage\r\nNatural Language Processing\r\nAI-Powered Customer Service: Chatbot Solution Reduces Response Time by 80%\r\nView Case Study \r\nimage\r\nMachine Learning\r\nPredictive Analytics: How We Helped E-commerce Giant Boost Sales by 45%', '[{\"image\":\"aiml_gallery\\/0BZMe7opUWGIo9yELeKKfwbz3CrgoXdQdOfAeq57.png\",\"tags\":[\"Predictive\",\"commerce\",\"Analytics\"]},{\"image\":\"aiml_gallery\\/EukjKrNFeLn8VF1yEi2dJXsElOFoG61oF93m4MJE.png\",\"tags\":[\"Giant\",\"Sales\"]},{\"image\":\"aiml_gallery\\/bJ3FyAyNnQNDkC3NHND0nR54juFzNA3HbaXGC0E6.png\",\"tags\":[\"Helped\",\"Boost\"]}]', '1', '2025-07-30 07:44:09', '2025-07-30 20:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_gallery_tag`
--

CREATE TABLE `aiml_home_gallery_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_gallery_tag`
--

INSERT INTO `aiml_home_gallery_tag` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Mind Tech', 'mind-tech', '1', '2025-07-30 05:52:21', '2025-07-30 06:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero`
--

CREATE TABLE `aiml_home_hero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero`
--

INSERT INTO `aiml_home_hero` (`id`, `user_id`, `tag_line`, `heading`, `description`, `image`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Designing for the futurea', 'Empowering Your Business With Artificial', 'And In Order To Make A Business, Brand Advertising And Marketing Plays An Important Role. Similarly, In', 'home-hero-sections/NoifLJV5aAJFwxBwmyZX1FofrexhCdbBZQ35JWTL.png', 'Discover More', 'http://127.0.0.1:8000/admin/ai-ml', '2025-07-29 05:22:52', '2025-07-29 05:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_about`
--

CREATE TABLE `aiml_home_hero_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `about_company` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`about_company`)),
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_about`
--

INSERT INTO `aiml_home_hero_about` (`id`, `user_id`, `title_tag`, `heading`, `description`, `btn_label`, `btn_link`, `about_company`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1', 'About Company', 'Experience intelligence like  never before', 'You can access SaaS applications through a web browser or mobile app, as long as you have an internet connection.', 'Discover More', 'http://127.0.0.1:8000/admin/ai-ml', '[\"Mistakes To Avoid to the\",\"Your Startup industry stan\",\"Mistakes To Avoid to the\",\"Your Startup industry stan\"]', 'about_company/8GVlCcNKrb6OEGb4LaFMBGiTH6lT0ybxYePtaMuE.png', 'about_company/dwv8Bn441Hice7ExhobkosEX9e8Rc5zn83uMIGcH.png', '2025-07-29 05:25:40', '2025-07-29 05:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_process`
--

CREATE TABLE `aiml_home_hero_process` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `process` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`process`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_process`
--

INSERT INTO `aiml_home_hero_process` (`id`, `title_tag`, `heading`, `description`, `process`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'WORK PROCESS', 'Empowering You rBusiness With Artificial', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '[{\"title\":\"Assessment\",\"value\":\"Research ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Implementationplanning\",\"value\":\"Create ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Capabilities\",\"value\":\"Develope ipsum dolor sit consec tetur sed diam in the aliquam tempor\"},{\"title\":\"Innovation\",\"value\":\"Shop ipsum dolor sit consec tetur Malesuada sed diam in the\"}]', '1', '2025-07-29 05:56:01', '2025-07-29 05:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `aiml_home_hero_services`
--

CREATE TABLE `aiml_home_hero_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `image` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aiml_home_hero_services`
--

INSERT INTO `aiml_home_hero_services` (`id`, `title_tag`, `heading`, `description`, `services`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Best Service', 'Unlocking The Potential Of Data With Ai', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '[{\"title\":\"AI Consult\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Neural Solutions\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Data Mind\",\"value\":\"OWe delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"},{\"title\":\"Wise Logic\",\"value\":\"We delve deep into understanding our client\'s aspirations, challenges, and unique requirements.\"}]', 'home-hero-services/mVngrsEqQ0VH2m2OqME2I4Yvycuz7SZPShWTdjsb.png', '1', '2025-07-29 05:28:09', '2025-07-29 05:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `award_testimonials`
--

CREATE TABLE `award_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `counter` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_testimonials`
--

INSERT INTO `award_testimonials` (`id`, `user_id`, `image`, `heading`, `tag_line`, `counter`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'about-tech/bJp8MTkSBuKfwE2edrppxWSbmLfc4gsL96tkHpLs.png,about-tech/NOfNibMsslNWkbnrAvp1Ph8uWTdISSAINUTXSJkT.png,about-tech/htykcFBPqhIU3yOPbaZlIYfENz8URXZA8LoAXIKf.png,about-tech/YoDDfHI55CpKL60KvZP7FAWEnJUXVxqiLI4vJF1J.png', 'Awards & Testimonials', 'Voices of Victory', '[{\"title\":\"verified reviews on Clutch\",\"value\":\"10+\"},{\"title\":\"Average rating on Clutch\",\"value\":\"5.0+\"}]', 'A satisfied client is the best indicator of collaboration success and approach to a project.', '2025-07-25 07:21:06', '2025-07-25 23:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` text DEFAULT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_description` longtext NOT NULL,
  `featured_image` text NOT NULL,
  `is_display` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`is_display`)),
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_slug`, `blog_description`, `featured_image`, `is_display`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3,7,8,12', 'The Future of Software Development: Trends, Tools, and Best Practices for 2025 and Beyond', 'the-future-of-software-development-trends-tools-and-best-practices-for-2025-and-beyond', '<p data-start=\"243\" data-end=\"571\">In today&rsquo;s hyper-connected digital age,&nbsp;<strong data-start=\"283\" data-end=\"300\">cybersecurity</strong>&nbsp;is no longer optional&mdash;it&rsquo;s an absolute necessity. The rapid adoption of cloud computing, Internet of Things (IoT), artificial intelligence (AI), and remote work has opened new opportunities for growth, but it has also created countless entry points for cybercriminals.</p>\r\n<p data-start=\"573\" data-end=\"884\">By 2025, cyber threats have grown more sophisticated, and organizations face an unprecedented need for robust security measures. This blog will explore the state of cybersecurity in 2025, the biggest threats businesses face, the latest defensive technologies, and best practices to keep digital assets secure.</p>\r\n<hr data-start=\"886\" data-end=\"889\">\r\n<h3 data-start=\"891\" data-end=\"938\"><strong data-start=\"895\" data-end=\"938\">1. The Changing Cybersecurity Landscape</strong></h3>\r\n<p data-start=\"939\" data-end=\"1266\">Cybersecurity has shifted from being a purely IT concern to a&nbsp;<strong data-start=\"1001\" data-end=\"1029\">boardroom-level priority</strong>. In the early 2000s, security was mostly about installing antivirus software and firewalls. Today, it involves&nbsp;<strong data-start=\"1141\" data-end=\"1263\">real-time threat intelligence, AI-driven monitoring, zero trust architecture, and continuous vulnerability assessments</strong>.</p>\r\n<p data-start=\"1268\" data-end=\"1421\">Cybercriminals are leveraging&nbsp;<strong data-start=\"1298\" data-end=\"1349\">automation, AI, and advanced social engineering</strong>&nbsp;to launch attacks at scale, making traditional defenses insufficient.</p>\r\n<hr data-start=\"1423\" data-end=\"1426\">\r\n<h3 data-start=\"1428\" data-end=\"1474\"><strong data-start=\"1432\" data-end=\"1474\">2. Major Cybersecurity Threats in 2025</strong></h3>\r\n<h4 data-start=\"1475\" data-end=\"1501\"><strong data-start=\"1480\" data-end=\"1501\">a. Ransomware 3.0</strong></h4>\r\n<p data-start=\"1502\" data-end=\"1698\">Ransomware has evolved from encrypting files to&nbsp;<strong data-start=\"1550\" data-end=\"1581\">double and triple extortion</strong>&nbsp;tactics&mdash;stealing data, encrypting systems, and threatening to leak sensitive information if payments are not made.</p>\r\n<h4 data-start=\"1700\" data-end=\"1730\"><strong data-start=\"1705\" data-end=\"1730\">b. AI-Powered Attacks</strong></h4>\r\n<p data-start=\"1731\" data-end=\"1889\">Cybercriminals now use AI to automate phishing campaigns, create deepfake audio/video for fraud, and even exploit vulnerabilities faster than human hackers.</p>\r\n<h4 data-start=\"1891\" data-end=\"1923\"><strong data-start=\"1896\" data-end=\"1923\">c. Supply Chain Attacks</strong></h4>\r\n<p data-start=\"1924\" data-end=\"2048\">Attackers target less secure vendors, software libraries, or cloud providers to compromise multiple organizations at once.</p>\r\n<h4 data-start=\"2050\" data-end=\"2081\"><strong data-start=\"2055\" data-end=\"2081\">d. IoT Vulnerabilities</strong></h4>\r\n<p data-start=\"2082\" data-end=\"2201\">Smart devices in offices, factories, and homes are often poorly secured, making them easy entry points into networks.</p>\r\n<h4 data-start=\"2203\" data-end=\"2230\"><strong data-start=\"2208\" data-end=\"2230\">e. Insider Threats</strong></h4>\r\n<p data-start=\"2231\" data-end=\"2332\">Employees&mdash;whether malicious or careless&mdash;remain one of the biggest risks to organizational security.</p>\r\n<hr data-start=\"2334\" data-end=\"2337\">\r\n<h3 data-start=\"2339\" data-end=\"2388\"><strong data-start=\"2343\" data-end=\"2388\">3. Key Cybersecurity Technologies in 2025</strong></h3>\r\n<h4 data-start=\"2389\" data-end=\"2430\"><strong data-start=\"2394\" data-end=\"2430\">a. Zero Trust Architecture (ZTA)</strong></h4>\r\n<p data-start=\"2431\" data-end=\"2571\">The Zero Trust model assumes no user or device is trustworthy by default. Every access request is verified, no matter where it originates.</p>\r\n<h4 data-start=\"2573\" data-end=\"2629\"><strong data-start=\"2578\" data-end=\"2629\">b. AI and Machine Learning for Threat Detection</strong></h4>\r\n<p data-start=\"2630\" data-end=\"2757\">AI systems can detect anomalies, predict potential attacks, and respond in milliseconds&mdash;much faster than traditional methods.</p>\r\n<h4 data-start=\"2759\" data-end=\"2808\"><strong data-start=\"2764\" data-end=\"2808\">c. Extended Detection and Response (XDR)</strong></h4>\r\n<p data-start=\"2809\" data-end=\"2935\">XDR integrates multiple security layers&mdash;endpoint, network, email, and cloud&mdash;into a unified monitoring and response platform.</p>\r\n<h4 data-start=\"2937\" data-end=\"2982\"><strong data-start=\"2942\" data-end=\"2982\">d. Secure Access Service Edge (SASE)</strong></h4>\r\n<p data-start=\"2983\" data-end=\"3092\">A cloud-based approach that combines network security and wide-area networking (WAN) into a single service.</p>\r\n<h4 data-start=\"3094\" data-end=\"3134\"><strong data-start=\"3099\" data-end=\"3134\">e. Quantum-Resistant Encryption</strong></h4>\r\n<p data-start=\"3135\" data-end=\"3262\">With quantum computing on the horizon, companies are adopting encryption algorithms that can withstand quantum-level attacks.</p>\r\n<hr data-start=\"3264\" data-end=\"3267\">\r\n<h3 data-start=\"3269\" data-end=\"3320\"><strong data-start=\"3273\" data-end=\"3320\">4. Best Practices for Cybersecurity in 2025</strong></h3>\r\n<h4 data-start=\"3321\" data-end=\"3376\"><strong data-start=\"3326\" data-end=\"3376\">a. Implement Multi-Factor Authentication (MFA)</strong></h4>\r\n<p data-start=\"3377\" data-end=\"3463\">Requiring more than one verification method drastically reduces unauthorized access.</p>\r\n<h4 data-start=\"3465\" data-end=\"3500\"><strong data-start=\"3470\" data-end=\"3500\">b. Regular Security Audits</strong></h4>\r\n<p data-start=\"3501\" data-end=\"3598\">Conduct penetration testing and vulnerability scans to identify weaknesses before attackers do.</p>\r\n<h4 data-start=\"3600\" data-end=\"3638\"><strong data-start=\"3605\" data-end=\"3638\">c. Employee Security Training</strong></h4>\r\n<p data-start=\"3639\" data-end=\"3749\">Humans are the weakest link. Regular phishing simulations and security awareness programs help reduce risks.</p>\r\n<h4 data-start=\"3751\" data-end=\"3794\"><strong data-start=\"3756\" data-end=\"3794\">d. Data Backups and Recovery Plans</strong></h4>\r\n<p data-start=\"3795\" data-end=\"3888\">Regularly back up critical data to secure, offline locations, and test recovery procedures.</p>\r\n<h4 data-start=\"3890\" data-end=\"3918\"><strong data-start=\"3895\" data-end=\"3918\">e. Patch Management</strong></h4>\r\n<p data-start=\"3919\" data-end=\"4012\">Keep all software and firmware up to date to prevent exploitation of known vulnerabilities.</p>\r\n<hr data-start=\"4014\" data-end=\"4017\">\r\n<h3 data-start=\"4019\" data-end=\"4051\"><strong data-start=\"4023\" data-end=\"4051\">5. Regulatory Compliance</strong></h3>\r\n<p data-start=\"4052\" data-end=\"4181\">With increasing data breaches, governments worldwide have tightened data protection laws. By 2025, businesses must comply with:</p>\r\n<ul data-start=\"4182\" data-end=\"4420\">\r\n<li data-start=\"4182\" data-end=\"4236\">\r\n<p data-start=\"4184\" data-end=\"4236\"><strong data-start=\"4184\" data-end=\"4197\">GDPR (EU)</strong>&nbsp;&ndash; General Data Protection Regulation</p>\r\n</li>\r\n<li data-start=\"4237\" data-end=\"4296\">\r\n<p data-start=\"4239\" data-end=\"4296\"><strong data-start=\"4239\" data-end=\"4260\">CCPA (California)</strong>&nbsp;&ndash; California Consumer Privacy Act</p>\r\n</li>\r\n<li data-start=\"4297\" data-end=\"4356\">\r\n<p data-start=\"4299\" data-end=\"4356\"><strong data-start=\"4299\" data-end=\"4315\">DPDP (India)</strong>&nbsp;&ndash; Digital Personal Data Protection Act</p>\r\n</li>\r\n<li data-start=\"4357\" data-end=\"4420\">\r\n<p data-start=\"4359\" data-end=\"4420\"><strong data-start=\"4359\" data-end=\"4372\">ISO 27001</strong>&nbsp;&ndash; International information security standard</p>\r\n</li>\r\n</ul>\r\n<p data-start=\"4422\" data-end=\"4495\">Non-compliance can lead to&nbsp;<strong data-start=\"4449\" data-end=\"4492\">hefty fines, lawsuits, and brand damage</strong>.</p>\r\n<hr data-start=\"4497\" data-end=\"4500\">\r\n<h3 data-start=\"4502\" data-end=\"4539\"><strong data-start=\"4506\" data-end=\"4539\">6. The Role of Cloud Security</strong></h3>\r\n<p data-start=\"4540\" data-end=\"4646\">Cloud adoption has skyrocketed, but so have cloud-related breaches. Key cloud security measures include:</p>\r\n<ul data-start=\"4647\" data-end=\"4872\">\r\n<li data-start=\"4647\" data-end=\"4700\">\r\n<p data-start=\"4649\" data-end=\"4700\"><strong data-start=\"4649\" data-end=\"4668\">Data Encryption</strong>&nbsp;&ndash; Both in transit and at rest</p>\r\n</li>\r\n<li data-start=\"4701\" data-end=\"4777\">\r\n<p data-start=\"4703\" data-end=\"4777\"><strong data-start=\"4703\" data-end=\"4741\">Identity &amp; Access Management (IAM)</strong>&nbsp;&ndash; Controlling who can access what</p>\r\n</li>\r\n<li data-start=\"4778\" data-end=\"4872\">\r\n<p data-start=\"4780\" data-end=\"4872\"><strong data-start=\"4780\" data-end=\"4824\">Cloud Security Posture Management (CSPM)</strong>&nbsp;&ndash; Continuous monitoring and compliance checks</p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"4874\" data-end=\"4877\">\r\n<h3 data-start=\"4879\" data-end=\"4915\"><strong data-start=\"4883\" data-end=\"4915\">7. Incident Response in 2025</strong></h3>\r\n<p data-start=\"4916\" data-end=\"5003\">Even the best defenses can be breached. A modern&nbsp;<strong data-start=\"4965\" data-end=\"4991\">incident response plan</strong>&nbsp;includes:</p>\r\n<ol data-start=\"5004\" data-end=\"5356\">\r\n<li data-start=\"5004\" data-end=\"5061\">\r\n<p data-start=\"5007\" data-end=\"5061\"><strong data-start=\"5007\" data-end=\"5022\">Preparation</strong>&nbsp;&ndash; Define roles, tools, and processes</p>\r\n</li>\r\n<li data-start=\"5062\" data-end=\"5125\">\r\n<p data-start=\"5065\" data-end=\"5125\"><strong data-start=\"5065\" data-end=\"5089\">Detection &amp; Analysis</strong>&nbsp;&ndash; Use AI-powered monitoring tools</p>\r\n</li>\r\n<li data-start=\"5126\" data-end=\"5179\">\r\n<p data-start=\"5129\" data-end=\"5179\"><strong data-start=\"5129\" data-end=\"5144\">Containment</strong>&nbsp;&ndash; Limit the spread of the attack</p>\r\n</li>\r\n<li data-start=\"5180\" data-end=\"5234\">\r\n<p data-start=\"5183\" data-end=\"5234\"><strong data-start=\"5183\" data-end=\"5198\">Eradication</strong>&nbsp;&ndash; Remove malicious code or actors</p>\r\n</li>\r\n<li data-start=\"5235\" data-end=\"5280\">\r\n<p data-start=\"5238\" data-end=\"5280\"><strong data-start=\"5238\" data-end=\"5250\">Recovery</strong>&nbsp;&ndash; Restore normal operations</p>\r\n</li>\r\n<li data-start=\"5281\" data-end=\"5356\">\r\n<p data-start=\"5284\" data-end=\"5356\"><strong data-start=\"5284\" data-end=\"5308\">Post-Incident Review</strong>&nbsp;&ndash; Learn from the incident to improve security</p>\r\n</li>\r\n</ol>\r\n<hr data-start=\"5358\" data-end=\"5361\">\r\n<h3 data-start=\"5363\" data-end=\"5408\"><strong data-start=\"5367\" data-end=\"5408\">8. The Human Element in Cybersecurity</strong></h3>\r\n<p data-start=\"5409\" data-end=\"5590\">While AI and automation are crucial, human expertise remains irreplaceable. Security analysts, ethical hackers, and incident response teams are the backbone of defense strategies.</p>\r\n<p data-start=\"5592\" data-end=\"5730\">Encouraging a&nbsp;<strong data-start=\"5606\" data-end=\"5632\">security-first culture</strong>&mdash;where employees take responsibility for protecting data&mdash;is just as important as any technology.</p>\r\n<hr data-start=\"5732\" data-end=\"5735\">\r\n<h3 data-start=\"5737\" data-end=\"5775\"><strong data-start=\"5741\" data-end=\"5775\">9. The Future of Cybersecurity</strong></h3>\r\n<p data-start=\"5776\" data-end=\"5807\">Looking ahead, we can expect:</p>\r\n<ul data-start=\"5808\" data-end=\"6139\">\r\n<li data-start=\"5808\" data-end=\"5898\">\r\n<p data-start=\"5810\" data-end=\"5898\"><strong data-start=\"5810\" data-end=\"5846\">Automated, self-healing networks</strong>&nbsp;that detect and repair vulnerabilities instantly.</p>\r\n</li>\r\n<li data-start=\"5899\" data-end=\"5971\">\r\n<p data-start=\"5901\" data-end=\"5971\"><strong data-start=\"5901\" data-end=\"5939\">Universal biometric authentication</strong>&nbsp;replacing passwords entirely.</p>\r\n</li>\r\n<li data-start=\"5972\" data-end=\"6066\">\r\n<p data-start=\"5974\" data-end=\"6066\"><strong data-start=\"5974\" data-end=\"6001\">AI vs. AI cyber battles</strong>&nbsp;where defensive and offensive AI systems compete in real time.</p>\r\n</li>\r\n<li data-start=\"6067\" data-end=\"6139\">\r\n<p data-start=\"6069\" data-end=\"6139\"><strong data-start=\"6069\" data-end=\"6102\">Global cybersecurity treaties</strong>&nbsp;to combat cross-border cybercrime.</p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"6141\" data-end=\"6144\">\r\n<h3 data-start=\"6146\" data-end=\"6164\"><strong data-start=\"6150\" data-end=\"6164\">Conclusion</strong></h3>\r\n<p data-start=\"6165\" data-end=\"6414\">Cybersecurity in 2025 is a constant battle against evolving threats. Businesses that adopt&nbsp;<strong data-start=\"6256\" data-end=\"6341\">modern security architectures, AI-powered defenses, and a strong security culture</strong>&nbsp;will be best positioned to protect their assets, data, and reputation.</p>\r\n<p data-start=\"6416\" data-end=\"6532\">No matter the size of your organization, the cost of prevention will always be far less than the cost of a breach.</p>', 'blogs/x3girgsoqXOre7r2GDiEEUypkqcSC0KKuHQmsWms.png', '[\"blog\"]', '1', '1', '2025-09-24 00:32:59', '2025-10-02 07:38:32'),
(2, '10', 'Optimizing your online store for a maximum to sales impact your business to the world.', 'optimizing-your-online-store-for-a-maximum-to-sales-impact-your-business-to-the-world', '<p>Optimizing your online store for maximum sales impact and exposure involves a multifaceted approach &amp; incorporating a blog can be a crucial aspect.</p>', 'blogs/4JhRfko13h4giJRL7GSfrCR1f82FsEEf8y9ZbqsG.png', '[\"blog\"]', '1', '1', '2025-09-24 00:41:35', '2025-09-24 00:41:35'),
(3, '3', 'We’re here to explain how data analytics with sofax can help to grow your business.', 'were-here-to-explain-how-data-analytics-with-sofax-can-help-to-grow-your-business', '<div class=\"sofax-inner-blog-details-content\">\r\n<h3>Optimizing your online store for a maximum to the sales impact &amp; expose your business to the world.</h3>\r\n<p>Optimizing your online store for maximum sales impact &amp; exposure involves a multifaceted approach &amp; incorporating a blog can be a crucial aspect of that strategy. Here\'s a detailed breakdown of how to leverage a blog to enhance your online store\'s performance:</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>1. Mobile Optimization</h4>\r\n<p>Ensure your online store is mobile-friendly, as a significant portion of online shopping occurs on mobile devices. Optimize your website design and user experience for smartphones and tablets to maximize accessibility and conversion rates.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>2. Search Engine Optimization</h4>\r\n<p>Implement SEO best practices to improve your website\'s visibility in search engine results. This includes optimizing product descriptions, meta tags &amp; URLs as well as building quality backlinks &amp; creating valuable content that aligns with relevant keywords.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>3. Review &amp; Testimonials</h4>\r\n<p>Display customer reviews and testimonials prominently on your website to build trust and credibility. Positive reviews can reassure potential buyers and encourage them to complete their purchase.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>4. Social Media Marketing</h4>\r\n<p>Leverage social media platforms to promote your online store &amp; engage with your target audience. Create compelling content, run targeted ad campaigns, and actively interact with followers to drive traffic and generate sales.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content2 light-color\">\r\n<h3>\"Online stores are great in that grow and evolve with your business, becoming more valuable.\"</h3>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>5. Streamlined Checkout Process</h4>\r\n<p>Simplify the checkout process to minimize friction and reduce cart abandonment rates. Offer guest checkout options, provide multiple payment methods &amp; optimize page load times to create a seamless purchasing experience.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>6. Analytics &amp; Optimization</h4>\r\n<p>Regularly monitor key performance indicators such as conversion rates, average order to value &amp; customer acquisition cost. Use analytics tools to identify areas for improvement &amp; make data-driven decisions to optimize your online store for maximum sales impact.</p>\r\n</div>\r\n<div class=\"sofax-inner-blog-details-content-data\">\r\n<h4>7. Email Marketing</h4>\r\n<p>Build an email list of subscribers and send targeted email campaigns to promote new a products special offers &amp; discounts. Use segmentation &amp; personalization techniques to deliver relevant content that resonates with</p>\r\n</div>', 'blogs/IL2riK3bj05H1pcR97oClZ6hCDK4g1KRZGT8qrLI.png', '[]', '1', '1', '2025-09-24 00:42:38', '2025-09-24 00:43:28'),
(4, '11,15', 'Business Mentorship Programmes: Your Blueprint for Accelerated Growth', 'business-mentorship-programmes-your-blueprint-for-accelerated-growth', '<p class=\"MsoNormal\">Every entrepreneur encounters moments when a fresh perspective, hard-earned wisdom or a timely connection can be the difference between plateauing and scaling. Business mentorship programmes bring together seasoned experts and ambitious founders in a structured environment, ensuring you learn faster, sidestep common pitfalls and unlock doors that would otherwise remain closed.</p>\r\n<h2 class=\"MsoNormal\"><strong>What Is a&nbsp;<a href=\"https://theentrepreneur.studio/business-mentoring-services\">Business Mentorship Programme</a>?</strong></h2>\r\n<p class=\"MsoNormal\">A business mentorship programme pairs you with an experienced leader&mdash;often on a one-to-one basis or within a small cohort&mdash;who offers guidance tailored to your specific challenges. These programmes typically include:</p>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\">Regular mentor-mentee meetings (in person or virtual)</li>\r\n<li class=\"MsoNormal\">Goal-setting workshops to clarify priorities</li>\r\n<li class=\"MsoNormal\">Masterclasses on finance, marketing, operations or leadership</li>\r\n<li class=\"MsoNormal\">Peer-to-peer forums for shared lessons and networking</li>\r\n</ul>\r\n<p class=\"MsoNormal\">By combining expert insight with practical tools,&nbsp;<a href=\"https://theentrepreneur.studio/business-mentoring-services\">mentorship programmes</a>&nbsp;accelerate strategic learning and decision-making.</p>\r\n<h2 class=\"MsoNormal\"><strong>Key Benefits</strong></h2>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\"><strong>Clarity and Focus</strong><br>Mentors help you hone your objectives, turning vague ambitions into a clear, actionable roadmap.</li>\r\n<li class=\"MsoNormal\"><strong>Fast-Tracked Learning</strong><br>Avoid trial-and-error. Learn from your mentor&rsquo;s successes&mdash;and their mistakes&mdash;so you can implement proven tactics straight away.</li>\r\n<li class=\"MsoNormal\"><strong>Expanded Networks</strong><br>Access introductions to potential clients, investors or partners that would take years to cultivate on your own.</li>\r\n<li class=\"MsoNormal\"><strong>Accountability and Confidence</strong><br>Regular check-ins ensure you stick to your plans, while mentors bolster your belief in tackling big challenges.</li>\r\n</ul>\r\n<h2 class=\"MsoNormal\"><strong>Types of&nbsp;<a href=\"https://theentrepreneur.studio/business-mentoring-services\">Mentorship Programmes</a></strong></h2>\r\n<ol start=\"1\" type=\"1\">\r\n<li class=\"MsoNormal\"><strong>One-to-One Mentorship</strong><br>Pairing a single mentee with a dedicated mentor for highly personalised support.</li>\r\n<li class=\"MsoNormal\"><strong>Group or Cohort Mentoring</strong><br>Small groups of entrepreneurs learn together under the guidance of one or more mentors, fostering peer collaboration.</li>\r\n<li class=\"MsoNormal\"><strong>Peer Mentoring Circles</strong><br>Founders at similar stages meet regularly to share experiences, challenges and insights without a centralised expert.</li>\r\n<li class=\"MsoNormal\"><strong>Corporate-Sponsored Schemes</strong><br>Run by large companies or trade bodies, these often combine mentoring with workshops, grants or office space.</li>\r\n<li class=\"MsoNormal\"><strong>Virtual Platforms</strong><br>Online networks match mentors and mentees globally, offering flexibility for remote businesses.</li>\r\n</ol>\r\n<h2 class=\"MsoNormal\"><strong>Choosing the Right Programme</strong></h2>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\"><strong>Align with Your Goals</strong><br>Seek mentors whose expertise matches your growth stage&mdash;whether that&rsquo;s refining your business model, scaling operations or entering new markets.</li>\r\n<li class=\"MsoNormal\"><strong>Assess the Structure</strong><br>Some programmes emphasise formal curricula and milestones; others rely on ad-hoc sessions. Choose the format that fits your working style.</li>\r\n<li class=\"MsoNormal\"><strong>Check Track Record</strong><br>Look for testimonials, success metrics or alumni case studies. A high-quality programme will share the tangible outcomes participants have achieved.</li>\r\n<li class=\"MsoNormal\"><strong>Consider Time Commitment</strong><br>Ensure you can meet the minimum session requirements and actively prepare&mdash;mentoring works best when you arrive ready with questions and updates.</li>\r\n</ul>\r\n<h2 class=\"MsoNormal\"><strong>Making the Most of Your Mentorship</strong></h2>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\"><strong>Prepare in Advance</strong><br>Draft clear agendas: what progress you&rsquo;ve made, what roadblocks you&rsquo;re facing and what decisions lie ahead.</li>\r\n<li class=\"MsoNormal\"><strong>Be Open and Honest</strong><br>Share financials, customer feedback and internal team issues candidly. Vulnerability builds stronger, more productive relationships.</li>\r\n<li class=\"MsoNormal\"><strong>Act on Feedback Quickly</strong><br>Implement agreed actions and report back. Demonstrating results fosters deeper trust and richer guidance.</li>\r\n<li class=\"MsoNormal\"><strong>Give Back</strong><br>Contribute to peer forums, offer introductions from your network and celebrate others&rsquo; wins. A culture of reciprocity enhances the entire community.</li>\r\n</ul>\r\n<h2 class=\"MsoNormal\"><strong>Emerging Trends in Mentorship</strong></h2>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\"><strong>Micro-Mentoring Sessions</strong><br>Short, focused 30-minute calls for rapid problem&ndash;solving on a single topic, such as pricing strategy or recruitment.</li>\r\n<li class=\"MsoNormal\"><strong>AI-Driven Matching</strong><br>Platforms using algorithms to pair mentors and mentees based on personality traits, industry experience and learning preferences.</li>\r\n<li class=\"MsoNormal\"><strong>Hybrid Models</strong><br>Blended programmes combining in-person intensives with virtual follow-ups, balancing depth of connection with convenience.</li>\r\n<li class=\"MsoNormal\"><strong>Sector-Specific Cohorts</strong><br>Narrowly focused groups&mdash;tech start-ups, creative industries or social enterprises&mdash;allow mentors to dive deep into niche challenges.</li>\r\n</ul>\r\n<h2 class=\"MsoNormal\"><strong>A Real-Life Example: London Craft Collective</strong></h2>\r\n<p class=\"MsoNormal\">When London Craft Collective, a small artisan furniture co-operative, joined a&nbsp;<a href=\"https://theentrepreneur.studio/business-mentoring-services\">local mentorship programme</a>:</p>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\">They mapped out a three-phase growth plan with their mentor, combining workshop renovations with a direct-to-consumer e-commerce launch.</li>\r\n<li class=\"MsoNormal\">Monthly masterclasses on sustainable sourcing helped them rebrand as eco-friendly creators, boosting their average order value by 20%.</li>\r\n<li class=\"MsoNormal\">Peer-to-peer sessions sparked a collaboration with a neighbouring ceramics studio, opening a new product line and shared retail space.</li>\r\n</ul>\r\n<p class=\"MsoNormal\">Within nine months, turnover grew by 45% and their artisan network doubled in size.</p>\r\n<h2 class=\"MsoNormal\"><strong>Conclusion</strong></h2>\r\n<p class=\"MsoNormal\"><a href=\"https://theentrepreneur.studio/business-mentoring-services\">Business mentorship programmes</a> are far more than occasional advice sessions&mdash;they&rsquo;re accelerator engines for your enterprise&rsquo;s journey. By choosing the right format, engaging proactively and embracing emerging trends, you&rsquo;ll harness a wealth of experience that transforms challenges into stepping stones. Ready to tap into a mentor&rsquo;s insights and see your ambitions take flight? Explore the options available in your region and prepare to elevate</p>', 'blogs/ZEFPVEbcpZot0pac2qm8lJ4sBOZzdcwPCiTjclrn.png', '[\"blog\"]', '1', '1', '2025-09-24 04:09:32', '2025-09-24 04:09:32'),
(5, '14', 'Cloud Computing in 2025: The Backbone of Digital Transformation', 'cloud-computing-in-2025-the-backbone-of-digital-transformation', '<div class=\"WaaZC\">\r\n<div class=\"rPeykc uP58nb\" data-hveid=\"CBsQAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQo_EKegQIGxAB\"><span data-huuid=\"464526674445717045\"><span role=\"heading\" aria-level=\"2\">What a Description Does</span></span></div>\r\n</div>\r\n<div class=\"WaaZC\">\r\n<ul data-hveid=\"CCcQAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQm_YKegQIJxAB\">\r\n<li>\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445716310\"><strong>Provides details:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445716065\">It uses words and phrases to explain qualities, characteristics, and features of a person, place, or thing.<span class=\"pjBG2e\" data-cid=\"3ed46c92-1909-4ff5-9515-203ea08ca8fe\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"3ed46c92-1909-4ff5-9515-203ea08ca8fe\" data-uuids=\"464526674445716310,464526674445716065\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CCIQAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegQIIhAB\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n</ul>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__44\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445715575\"><strong>Appeals to senses:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445715330\">Good descriptions often incorporate sensory details (sight, sound, smell, taste, touch) to make the experience more immersive.<span class=\"pjBG2e\" data-cid=\"59bc35e4-4cea-4543-b852-8725d0605cc8\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"59bc35e4-4cea-4543-b852-8725d0605cc8\" data-uuids=\"464526674445715575,464526674445715330\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CH0QAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegQIfRAB\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__47\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445714840\"><strong>Creates an impression:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445714595\">The goal is to inform or give a reader a clear idea or impression of what is being described.<span class=\"pjBG2e\" data-cid=\"390d6bf8-c167-422e-b618-b3c10a16dd2b\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"390d6bf8-c167-422e-b618-b3c10a16dd2b\" data-uuids=\"464526674445714840,464526674445714595\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CIIBEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUIggEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"WaaZC\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__69\" class=\"bsmXxe\">\r\n<div class=\"rPeykc uP58nb\" data-hveid=\"CHsQAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQo_EKegQIexAB\"><span data-huuid=\"464526674445714105\"><span role=\"heading\" aria-level=\"2\">Examples of Descriptions in Different Contexts</span></span></div>\r\n</div>\r\n</div>\r\n<div class=\"WaaZC\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__29\" class=\"bsmXxe\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__31\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445717466\"><strong>People:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445717221\">\"The morning air was crisp and sharp as Sean walked down the road. The pavement was slippery and cold beneath his feet, like a slimy, wet fish\".&nbsp;</span><span data-huuid=\"464526674445716976\">This description tells us what the air felt like and the condition of the pavement.<span class=\"pjBG2e\" data-cid=\"8c611d21-4861-46c1-8861-614b372ef479\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"8c611d21-4861-46c1-8861-614b372ef479\" data-uuids=\"464526674445717466,464526674445717221,464526674445716976\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CJ0BEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUInQEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__36\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445716486\"><strong>Products:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445716241\">A&nbsp;<a class=\"uVhVib\" href=\"https://www.shopify.com/in/blog/8211159-9-simple-ways-to-write-product-descriptions-that-sell\">Shopify article</a>&nbsp;suggests using sensory language and speaking directly to the ideal customer, such as in a description for an \"I Love Plants Oodie\": \"Can\'t stop buying plants? Unbeleafable. Don\'t worry&mdash;us too! Cover yourself in your favourite obsession in our NEW I Love Plants Oodie!\".<span class=\"pjBG2e\" data-cid=\"1cab2892-219b-4f3a-8287-e4196ccf2280\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"1cab2892-219b-4f3a-8287-e4196ccf2280\" data-uuids=\"464526674445716486,464526674445716241\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CKABEAI\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUIoAEQAg\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__40\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445715751\"><strong>Events:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445715506\">A reporter might describe a scene as \"a disaster area,\" giving a concise, powerful impression of the event.<span class=\"pjBG2e\" data-cid=\"a9b2e26a-4354-4799-937e-894fe0032011\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"a9b2e26a-4354-4799-937e-894fe0032011\" data-uuids=\"464526674445715751,464526674445715506\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CJ8BEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUInwEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"WaaZC\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__70\" class=\"bsmXxe\">\r\n<div class=\"rPeykc uP58nb\" data-hveid=\"CHYQAQ\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQo_EKegQIdhAB\"><span data-huuid=\"464526674445715016\"><span role=\"heading\" aria-level=\"2\">Tips for Writing Descriptions</span></span></div>\r\n</div>\r\n</div>\r\n<div class=\"WaaZC\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__51\" class=\"bsmXxe\">\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__52\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445714281\"><strong>Be specific:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445714036\">Instead of saying \"a nice car,\" describe its color, make, or any unique features.<span class=\"pjBG2e\" data-cid=\"06e9283d-9692-426e-95a5-cce4c7e93fd9\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"06e9283d-9692-426e-95a5-cce4c7e93fd9\" data-uuids=\"464526674445714281,464526674445714036\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CJUBEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUIlQEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__55\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445713546\"><strong>Show, don\'t tell:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445717397\">Instead of saying \"he was sad,\" describe his slumped shoulders and downcast eyes.<span class=\"pjBG2e\" data-cid=\"4ad7db67-4c83-459b-a5f7-2ee800fabda8\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"4ad7db67-4c83-459b-a5f7-2ee800fabda8\" data-uuids=\"464526674445713546,464526674445717397\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CJwBEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUInAEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__58\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445716907\"><strong>Use strong nouns and verbs:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445716662\">Choose words that are precise and evocative.<span class=\"pjBG2e\" data-cid=\"781a2015-3781-4cc3-9e44-964712020ef5\"><span class=\"UV3uM\">&nbsp;</span></span></span>\r\n<div class=\"NPrrbc\" data-cid=\"781a2015-3781-4cc3-9e44-964712020ef5\" data-uuids=\"464526674445716907,464526674445716662\">\r\n<div class=\"BMebGe btku5b LwdV0e FR7ZSc qVhvac OJeuxf\" tabindex=\"0\" role=\"button\" aria-label=\"View related links\" data-hveid=\"CKEBEAE\" data-ved=\"2ahUKEwjxgYP2jfGPAxXlR2cHHVXmLSkQ3fYKegUIoQEQAQ\">\r\n<div class=\"niO4u\">\r\n<div class=\"kHtcsd\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"Ab3TaLH9IOWPnesP1cy3yQI__61\" class=\"bsmXxe\">\r\n<div class=\"zMgcWd dSKvsb\" data-il=\"\">\r\n<div data-crb-p=\"\">\r\n<div class=\"xFTqob\">\r\n<div class=\"Gur8Ad\"><span data-huuid=\"464526674445716172\"><strong>Consider figurative language:</strong>&nbsp;</span></div>\r\n<div class=\"vM0jzc\"><span data-huuid=\"464526674445715927\">Using similes (like the \"slippery pavement\")</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'blogs/YMt1aqZ39kWcT7GrD05OU9rhHoYsxjuGeaLz5G59.png', '[\"blog\"]', '1', '1', '2025-09-24 04:13:07', '2025-09-24 04:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'technical', 'technical', '1', '1', '2025-07-26 02:09:33', '2025-07-27 23:06:58'),
(3, 'Health & Wellness', 'health-wellness', '1', '1', '2025-07-26 02:45:00', '2025-07-26 02:45:00'),
(4, 'keyword', 'keyword', '1', '1', '2025-07-27 23:07:32', '2025-07-27 23:07:32'),
(5, 'research', 'research', '1', '1', '2025-07-27 23:07:41', '2025-07-27 23:07:41'),
(6, 'information', 'information', '1', '1', '2025-07-27 23:07:50', '2025-07-27 23:07:50'),
(7, 'website', 'website', '1', '1', '2025-07-27 23:07:58', '2025-07-27 23:07:58'),
(8, 'page', 'page', '1', '1', '2025-07-27 23:08:08', '2025-07-27 23:08:08'),
(9, 'ios', 'ios', '1', '1', '2025-07-27 23:08:24', '2025-07-27 23:08:24'),
(10, 'technology', 'technology', '1', '1', '2025-07-27 23:08:33', '2025-07-27 23:08:33'),
(11, 'design', 'design', '1', '1', '2025-07-27 23:08:42', '2025-07-27 23:08:42'),
(12, 'marketing', 'marketing', '1', '1', '2025-07-27 23:08:50', '2025-07-27 23:08:50'),
(13, 'corporate', 'corporate', '1', '1', '2025-07-27 23:08:58', '2025-07-27 23:08:58'),
(14, 'seo', 'seo', '1', '1', '2025-07-27 23:09:06', '2025-07-27 23:09:06'),
(15, 'tech', 'tech', '1', '1', '2025-07-27 23:09:12', '2025-07-27 23:09:12'),
(16, 'media', 'media', '1', '1', '2025-07-27 23:09:19', '2025-07-27 23:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_categories`
--

CREATE TABLE `case_study_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_categories`
--

INSERT INTO `case_study_categories` (`id`, `name`, `description`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Brand Identity', 'Develop unique and memorable brand elements. Logo design, color palette, and typography selection.', 'brand-identity', '1', '1', '2025-07-29 06:36:32', '2025-07-29 06:36:32'),
(2, 'Content creation', 'Engaging and SEO-friendly copywriting for websites and marketing materials.', 'content-creation', '1', '1', '2025-07-29 06:37:28', '2025-07-29 06:37:28'),
(3, 'Development', 'Full-stack development for robust and scalable solutions. Customized web and mobile application development.', 'development', '1', '1', '2025-07-29 06:38:40', '2025-07-29 06:38:40'),
(4, 'Product Design', 'Conceptualize and design innovative digital products. Focus on user needs, functionality, and aesthetics.', 'product-design', '1', '1', '2025-07-29 06:38:52', '2025-07-29 06:38:52'),
(5, 'UI/UX Design', 'Craft visually appealing and user-friendly interfaces. Enhance user experience through intuitive design.', 'uiux-design', '1', '1', '2025-07-29 06:39:06', '2025-07-29 06:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_technologies`
--

CREATE TABLE `case_study_technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_technologies`
--

INSERT INTO `case_study_technologies` (`id`, `name`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Technologys', 'technologys', '1', '1', '2025-07-30 00:59:28', '2025-07-30 00:59:28'),
(2, 'Home & Kitchen', 'home-kitchen', '1', '1', '2025-07-30 01:26:56', '2025-07-30 01:26:56'),
(3, 'Development', 'development', '1', '1', '2025-07-30 10:44:15', '2025-07-30 10:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sort_desc` text DEFAULT NULL,
  `file` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `title`, `sort_desc`, `file`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', 'New Data', 'A donation description for a child should explain what the donation provides , who it benefits and how it creates a positive impact', '1759380849.pdf', '1', '2025-10-01 23:24:09', '2025-10-02 00:23:03'),
(4, '1', 'Donate Food', 'A donation description for a child should explain what the donation provides , who it benefits and how it creates a positive impact', '1759381860.pdf', '1', '2025-10-01 23:41:00', '2025-10-02 00:22:57'),
(5, '1', 'Clothes Donation', 'A donation description for a child should explain what the donation provides , who it benefits and how it creates a positive impact', '1759381886.pdf', '1', '2025-10-01 23:41:26', '2025-10-02 00:22:53'),
(6, '1', '50,000 Donation Camp', 'A donation description for a child should explain what the donation provides , who it benefits and how it creates a positive impact', '1759381918.pdf', '1', '2025-10-01 23:41:58', '2025-10-02 00:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `client_stories`
--

CREATE TABLE `client_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `disc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_stories`
--

INSERT INTO `client_stories` (`id`, `user_id`, `heading`, `disc`, `created_at`, `updated_at`) VALUES
(1, '1', 'INITIAL DONATIONS', 'Dive into the success stories of Vibrant Software Technologies\'s clients—where digital dreams become reality.', '2025-07-23 00:33:52', '2025-09-09 20:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `client_stories_section`
--

CREATE TABLE `client_stories_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `client_heading` text NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_role` varchar(255) NOT NULL,
  `client_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_stories_section`
--

INSERT INTO `client_stories_section` (`id`, `user_id`, `client_heading`, `client_image`, `client_name`, `client_role`, `client_status`, `created_at`, `updated_at`) VALUES
(6, '1', 'A heartfelt thank you for the generous donation of ₹50,001 towards our Tree Plantation\r\n                                    initiative. This contribution will help us plant and nurture trees, creating a greener\r\n                                    and healthier tomorrow. Your support inspires us to continue our mission of protecting\r\n                                    nature and serving humanity.', 'uploads/client_stories/R9lM48x8VGsTiduSF57TNgNQ8HsP2xr50tkfU90K.png', 'Shirish Patel', 'Donor', '1', '2025-09-09 20:30:38', '2025-10-01 23:19:02'),
(7, '1', 'We sincerely thank you for the generous donation of ₹50,001 towards providing food,\r\n                                    clothing, and essentials to homeless individuals. Your kindness brings comfort, dignity,\r\n                                    and hope to those in need. Together, we can create a world where no one is left behind.', 'uploads/client_stories/q92vKiadHrC1m8pvQ1FD9I82KNHpb6DczrRyxjW1.png', 'Jigisha Patel', 'Donor', '1', '2025-09-09 20:38:33', '2025-10-01 23:20:34'),
(8, '1', 'We deeply appreciate the generous donation of ₹50,001 towards helping the disabled. Your\r\n                                    support empowers differently-abled individuals with care, dignity, and opportunities to\r\n                                    live a better life. Together, we can build an inclusive society where everyone has the\r\n                                    chance to thrive.', 'uploads/client_stories/i9Zl8lQ3PJGbWuvfKm3gPNP9QkbmuNfLFw7hzFfM.png', 'Bipinbhai Patel', 'Donor', '1', '2025-09-09 20:39:14', '2025-10-01 23:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_logo_dark` text DEFAULT NULL,
  `site_logo_light` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `social_facebook` varchar(255) DEFAULT NULL,
  `social_twitter` varchar(255) DEFAULT NULL,
  `social_instagram` varchar(255) DEFAULT NULL,
  `social_linkedin` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `footer_business_image` text DEFAULT NULL,
  `footer_business_description` text DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `phone_pay` text DEFAULT NULL,
  `google_pay` text DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ac_holder_name` varchar(255) DEFAULT NULL,
  `ac_number` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `ac_type` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `site_name`, `site_logo_dark`, `site_logo_light`, `favicon`, `email`, `phone`, `address`, `social_facebook`, `social_twitter`, `social_instagram`, `social_linkedin`, `site_description`, `footer_business_image`, `footer_business_description`, `user_id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `from_email`, `phone_pay`, `google_pay`, `bank_name`, `ac_holder_name`, `ac_number`, `bank_branch`, `ac_type`, `ifsc_code`, `created_at`, `updated_at`) VALUES
(1, 'Karma Belief', 'web_image/uBXDjsg86IQ0h0OAFnHtURbvZrwNhwvbR8EQxeO1.png', 'web_image/n1YqXivoxCh53eF3Ddat5VuVSBsRjvrRz56EjZmV.png', 'web_image/7pIPu3BjrBKwDrP94EP5ipHJgWYSY8JIRHRLdk7g.png', 'info@karmabelief.com', '9999888874', 'B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'web_image/h8Mn2cthUDcEle9qtCuxFIEJmwTf4hoVFicadLLz.png', 'Your insights matter! Drop us a line and share your thoughts. AgenShark values your feedback and looks forward to hearing from you.', '1', 'smtp', 'sandbox.smtp.mailtrap.io', '2525', '0761f483b96314', 'c27afcc38e02f6', 'hello@example.com', 'web_image/j2r2VBwrSvChpNQzLt0RGgcMCxVSIUo8udh1ocVm.jpg', 'web_image/ks45yxkmgPUs6fgIOdYRTLDu9ywub9KnysvXN4v9.jpg', 'ICIC Bank', 'Karma Belief Charitable Trust', '230805001088', 'Ahmedabad Gujarat', 'Current Account', 'ICICI002308', NULL, '2025-09-30 23:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `massage` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `subject_name`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(2, 'Mehul Prajapati', '9662583837', 'Vision Computer', 'visioncomputer@gmail.com', 'Web development services', '2025-05-13 20:51:56', '2025-05-13 20:51:56'),
(3, 'prajapati prem', '9313591287', 'Error', 'prem81481@gmail.com', 'vsfdg', '2025-07-28 03:33:48', '2025-07-28 03:33:48'),
(5, 'Mukeshbhai Ishwarbhai Prajapati', '9874561214', 'About Validation Fail', 'admin.easycart@gmail.com', 'Multiple times we are noticed that a validation error may be occupired, when i make currect Mobile Number than They will Showing me The Number Formate is undefined', '2025-07-28 04:26:57', '2025-07-28 04:26:57'),
(6, 'Sinal Mevada', '5865542515', 'cONFIGURSTION', 'smp34@gmail.com', 'IDJB HF VIUCRED INDORTIOS JEXDO', '2025-07-28 23:32:17', '2025-07-28 23:32:17'),
(7, 'sdfagrdg', '9874561230', 'sgrg', 'quotes.admin@gmail.com', 'asDGsdf', '2025-09-23 23:23:18', '2025-09-23 23:23:18'),
(8, 'prem prajapati', '9874561230', 'yufjk', 'prem81481@gmail.com', 'fregdfgh', '2025-09-23 23:27:40', '2025-09-23 23:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero`
--

CREATE TABLE `c_d_home_hero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero`
--

INSERT INTO `c_d_home_hero` (`id`, `user_id`, `tag_line`, `heading`, `description`, `image`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Building Your Digital Future', 'Custom Software Development Solutions', 'Transform your business with tailored software solutions that perfectly align with your unique requirements and goals.', 'home-hero-sections/5SPvnj97ysgQVXpSqZjSj7bloapQfu5CnAp0wl9i.png', 'Get Started', 'http://127.0.0.1:8000/custom-development', '2025-07-29 01:30:28', '2025-07-29 01:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_expertise`
--

CREATE TABLE `c_d_home_hero_expertise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `expertise` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`expertise`)),
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_expertise`
--

INSERT INTO `c_d_home_hero_expertise` (`id`, `user_id`, `title_tag`, `heading`, `description`, `btn_label`, `btn_link`, `expertise`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1', 'Our Expertise', 'Crafting Custom Solutions for Your Success', 'We specialize in developing tailored software solutions that drive innovation and efficiency in your business operations.', 'start your project', 'http://127.0.0.1:8000/admin/c-d-home-hero', '[\"Web Applications\",\"Enterprise Software\",\"Mobile Solutions\",\"API Integration\",\"Development\"]', 'expertise/qHLxD3VQJwdBUeYfnK0EALiJ6eHSM2UPpjN9iEoe.png', 'expertise/r7zam5oXL3YWlpAWRqNTwEVMMXnfuZXzDCdiJQky.png', '2025-07-29 02:01:41', '2025-07-29 02:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_process`
--

CREATE TABLE `c_d_home_hero_process` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `process` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`process`)),
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_process`
--

INSERT INTO `c_d_home_hero_process` (`id`, `title_tag`, `heading`, `description`, `process`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'DEVELOPMENT PROCESS', 'OurProven Development Methodology', 'We follow a systematic approach to deliver high-quality software solutions\r\nthat exceed expectations.', '[{\"title\":\"Requirements Analysis\",\"value\":\"Thorough analysis of your business needs and project requirements\"},{\"title\":\"Design & Planning\",\"value\":\"Creating detailed technical specifications and project roadmap\"},{\"title\":\"Development\",\"value\":\"Agile development with regular updates and iterations\"},{\"title\":\"Testing &  Deployment\",\"value\":\"Rigorous testing and smooth deployment process\"}]', '1', '2025-07-29 04:18:34', '2025-07-29 04:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_home_hero_services`
--

CREATE TABLE `c_d_home_hero_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `image` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_home_hero_services`
--

INSERT INTO `c_d_home_hero_services` (`id`, `title_tag`, `heading`, `description`, `services`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', 'Comprehensive Development Solutions', 'From concept to deployment, we deliver end-to-end custom software solutions\r\nthat drive your business forward.', '[{\"title\":\"API Integration\",\"value\":\"Seamless integration with third-party services and existing systems.\"},{\"title\":\"Mobile Apps\",\"value\":\"Enterprise Software\"},{\"title\":\"Cloud Solutions\",\"value\":\"Scalable cloud-based applications and infrastructure solutions.\"},{\"title\":\"DevOps Services\",\"value\":\"Continuous integration and deployment with modern DevOps practices.\"}]', 'home-hero-services/a4F0X290uYIEzirEu1Rc2fQSVFmc10mcQYDJIGBT.png', '1', '2025-07-29 03:09:27', '2025-07-29 03:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `c_d_inquiry`
--

CREATE TABLE `c_d_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_d_inquiry`
--

INSERT INTO `c_d_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Ready to Start Your Custom Development', 'Start Your Project', 'http://127.0.0.1:8000/admin/about-inquiry', 'Let\'s discuss your project requirements and create a solution that perfectly fits your needs. Get in touch with our development team today!', '2025-07-30 03:16:20', '2025-07-30 03:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `user_id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 'Mr. Robin.V', 'donates/GsRIcgqjL5itBsVuslXtvDo2IpfFUt8ullqsmcEa.png', 'Donate 50,000 for Food', '1', '2025-09-30 01:47:25', '2025-09-30 01:47:25'),
(5, '1', 'Manish Shah', 'donates/4AjHoeyDLqtIZVp3RjClbaaXWEovSNJgfhTaCxP5.png', 'Donate 1,00,00 for Clothes', '1', '2025-09-30 01:47:58', '2025-09-30 01:47:58'),
(6, '1', 'Mr Vasudev and Sons', 'donates/hzCv8V4Eydj1jZtEM8gGeKx34MccESuLyb15Gn7w.png', 'Donate 5,00,000 for Study Purpose', '1', '2025-09-30 01:48:38', '2025-09-30 01:48:50'),
(7, '1', 'Donalt trump', 'donates/xNT6PTeQUp27ej2OwRUt1VJxc9RDHrJC2qrUxiEs.jpg', 'Donate Nothing For Nothing', '1', '2025-09-30 01:49:51', '2025-09-30 01:49:51'),
(8, '1', 'Mr Boos', 'donates/Px7iMVhqE7DuW0vMaBwEJPs4z4CKjhk6A6zlkTTo.jpg', 'Donate 10,00,000 For Traveling Good Things', '1', '2025-09-30 01:50:51', '2025-09-30 01:50:51'),
(9, '1', 'Mr. Prem', 'donates/tAIhF3MaXT3SiVUDAGjqWlc2h6EUTjer4e6Nub86.png', 'Donate 50,00,000 For Making A good view of Cherity', '1', '2025-09-30 01:51:37', '2025-09-30 02:22:16'),
(10, '1', 'Mr.Monalisa', 'donates/kmSex95anhoCs1vPSWu47LRREUr46OXtgdNmHShX.jpg', 'Donate 40,000 For Clothes', '1', '2025-09-30 01:52:21', '2025-09-30 01:52:21'),
(11, '1', 'Mr. Bond', 'donates/IagG38mGvHlMFp7s1IxcWUgSDkMeM4Aa5uPxKR9x.png', 'Donate Everything For Everything', '1', '2025-09-30 01:53:09', '2025-09-30 02:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_inquiry`
--

CREATE TABLE `dynamic_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dynamic_inquiry`
--

INSERT INTO `dynamic_inquiry` (`id`, `user_id`, `heading`, `btn_label`, `btn_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Ready to Transform Your Businessshape with Dynamic Solutions?', 'Start Your Transformation', 'http://127.0.0.1:8000/dynamic-solution', 'Let\'s discuss how our dynamic solutions can help your business grow. Get in touch with our team today!', '2025-07-30 03:18:25', '2025-07-30 03:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `event_slug` varchar(255) DEFAULT NULL,
  `event_desc` longtext DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `event_slug`, `event_desc`, `location`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IVI Summit 2025', 'events/0qiMMTChM85yLiJ1XW2eXZiG8g7DH9BYyjmSBN4S.png', 'ivi-summit-2025', '<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Community_Specification\">Community Specification</h3>\r\n</div>\r\n<p>In July 2020, the Linux Foundation announced an initiative allowing open-source communities to create Open Standards using tools and methods inspired by open-source developers.<sup id=\"cite_ref-42\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-42\"><span class=\"cite-bracket\">[</span>42<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Core_Infrastructure_Initiative\">Core Infrastructure Initiative</h3>\r\n</div>\r\n<p>The Core Infrastructure Initiative (CII), is a project managed by the Linux Foundation that enables technology companies, industry stakeholders, and esteemed developers to collaboratively identify and fund critical open-source projects in need of assistance. In June 2015, the organization announced financial support of nearly $500,000 for three new projects to better support critical security elements of the global information infrastructure.<sup id=\"cite_ref-43\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-43\"><span class=\"cite-bracket\">[</span>43<span class=\"cite-bracket\">]</span></a></sup>&nbsp;In May 2016, CII launched its Best Practice Badge program to raise awareness of development processes and project governance steps that will help projects have better security outcomes. In May 2017, CII issued its 100th badge to a passing project.<sup id=\"cite_ref-44\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-44\"><span class=\"cite-bracket\">[</span>44<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Community_Data_License_Agreement_(CDLA)\"><span id=\"Community_Data_License_Agreement_.28CDLA.29\"></span>Community Data License Agreement (CDLA)</h3>\r\n</div>\r\n<div class=\"hatnote navigation-not-searchable\" role=\"note\">See also:&nbsp;<a title=\"Open Database License\" href=\"https://en.wikipedia.org/wiki/Open_Database_License\">Open Database License</a></div>\r\n<p>Introduced in October 2017,<sup id=\"cite_ref-45\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-45\"><span class=\"cite-bracket\">[</span>45<span class=\"cite-bracket\">]</span></a></sup>&nbsp;the Community Data License Agreement (CDLA) is a legal framework for sharing data.<sup id=\"cite_ref-46\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-46\"><span class=\"cite-bracket\">[</span>46<span class=\"cite-bracket\">]</span></a></sup>&nbsp;There are two initial CDLA licenses:</p>\r\n<ul>\r\n<li>The CDLA-Sharing license was designed to embody the principles of&nbsp;<a title=\"Copyleft\" href=\"https://en.wikipedia.org/wiki/Copyleft\">copyleft</a>&nbsp;in a data license. It puts terms in place to ensure that downstream recipients can use and modify that data, and are also required to share their changes to the data.</li>\r\n<li>The CDLA-Permissive agreement is similar to permissive open source licenses in that the publisher of data allows anyone to use, modify, and do what they want with the data with no obligations to share changes or modifications.</li>\r\n</ul>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Linux.com\">Linux.com</h3>\r\n</div>\r\n<div class=\"hatnote navigation-not-searchable\" role=\"note\">Further information:&nbsp;<a title=\"Linux.com\" href=\"https://en.wikipedia.org/wiki/Linux.com\">Linux.com</a></div>\r\n<p>On March 3, 2009, the Linux Foundation announced that they would take over the management of&nbsp;<a title=\"Linux.com\" href=\"https://en.wikipedia.org/wiki/Linux.com\">Linux.com</a>&nbsp;from its previous owners,&nbsp;<a class=\"mw-redirect\" title=\"SourceForge, Inc\" href=\"https://en.wikipedia.org/wiki/SourceForge,_Inc\">SourceForge, Inc</a>.<sup id=\"cite_ref-47\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-47\"><span class=\"cite-bracket\">[</span>47<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The site was relaunched on May 13, 2009, shifting away from its previous incarnation as a news site to become a central source for Linux tutorials, information, software, documentation, and answers across the server, desktop/netbook, mobile, and embedded areas. It also includes a directory of Linux software and hardware.<sup id=\"cite_ref-48\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-48\"><span class=\"cite-bracket\">[</span>48<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Much like Linux itself,&nbsp;<a title=\"Linux.com\" href=\"https://en.wikipedia.org/wiki/Linux.com\">Linux.com</a>&nbsp;plans to rely on the community to create and drive content and conversation.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Linux_Foundation_Public_Health_(LFPH)\"><span id=\"Linux_Foundation_Public_Health_.28LFPH.29\"></span>Linux Foundation Public Health (LFPH)</h3>\r\n</div>\r\n<p>In 2020 amidst the&nbsp;<a title=\"COVID-19 pandemic\" href=\"https://en.wikipedia.org/wiki/COVID-19_pandemic\">COVID-19 pandemic</a>, the Linux Foundation announced the LFPH,<sup id=\"cite_ref-49\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-49\"><span class=\"cite-bracket\">[</span>49<span class=\"cite-bracket\">]</span></a></sup>&nbsp;a program dedicated to advancing and supporting the virus contact tracing work led by&nbsp;<a title=\"Google\" href=\"https://en.wikipedia.org/wiki/Google\">Google</a>&nbsp;and&nbsp;<a title=\"Apple Inc.\" href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple</a>&nbsp;and their Bluetooth notification systems. The LFPH is focusing its efforts on public health applications, including the effort\'s first initiative: a notification app intended for governments wanting to launch their privacy-focused exposure notification networks. As of today, LFPH hosts two contact-tracing apps.<sup id=\"cite_ref-50\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-50\"><span class=\"cite-bracket\">[</span>50<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"LF_Climate_Finance_Foundation\">LF Climate Finance Foundation</h3>\r\n</div>\r\n<p>In September 2020, The Linux Foundation announced the LF Climate Finance Foundation (LFCF), a new initiative \"to encourage investment in AI-enhanced open source analytics to&nbsp;<a title=\"Climate change mitigation\" href=\"https://en.wikipedia.org/wiki/Climate_change_mitigation\">address climate change</a>.\"<sup id=\"cite_ref-51\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-51\"><span class=\"cite-bracket\">[</span>51<span class=\"cite-bracket\">]</span></a></sup>&nbsp;LFCF plans to build a platform that will utilize open-source open data to help the financial investment, NGO, and academia sectors to help better model companies&rsquo; exposure to climate change.<sup id=\"cite_ref-52\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-52\"><span class=\"cite-bracket\">[</span>52<span class=\"cite-bracket\">]</span></a></sup>&nbsp;<a title=\"Allianz\" href=\"https://en.wikipedia.org/wiki/Allianz\">Allianz</a>, Amazon, Microsoft, and&nbsp;<a title=\"S&amp;P Global\" href=\"https://en.wikipedia.org/wiki/S%26P_Global\">S&amp;P Global</a>&nbsp;will be the initiative\'s founding members.<sup id=\"cite_ref-53\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-53\"><span class=\"cite-bracket\">[</span>53<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"LF_Energy\">LF Energy</h3>\r\n</div>\r\n<div class=\"hatnote navigation-not-searchable\" role=\"note\">Main article:&nbsp;<a title=\"LF Energy\" href=\"https://en.wikipedia.org/wiki/LF_Energy\">LF Energy</a></div>\r\n<p><a title=\"LF Energy\" href=\"https://en.wikipedia.org/wiki/LF_Energy\">LF Energy</a>&nbsp;is an initiative launched by the Linux Foundation in 2018 to improve the&nbsp;<a class=\"mw-redirect\" title=\"Power grid\" href=\"https://en.wikipedia.org/wiki/Power_grid\">power grid</a>.<sup id=\"cite_ref-54\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-54\"><span class=\"cite-bracket\">[</span>54<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-:1_55-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-:1-55\"><span class=\"cite-bracket\">[</span>55<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:LinuxconNorthAmerica2016.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/LinuxconNorthAmerica2016.jpg/250px-LinuxconNorthAmerica2016.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/LinuxconNorthAmerica2016.jpg/500px-LinuxconNorthAmerica2016.jpg 1.5x\" width=\"250\" height=\"200\" data-file-width=\"4080\" data-file-height=\"3264\"></a>\r\n<figcaption><a title=\"Linus Torvalds\" href=\"https://en.wikipedia.org/wiki/Linus_Torvalds\">Linus Torvalds</a>&nbsp;at&nbsp;<a class=\"mw-redirect\" title=\"LinuxCon\" href=\"https://en.wikipedia.org/wiki/LinuxCon\">LinuxCon</a>&nbsp;North America 2016</figcaption>\r\n</figure>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Training_and_certification\">Training and certification</h3>\r\n</div>\r\n<p>The Linux Foundation Training Program features instructors and content from the leaders of the Linux developer and open-source communities.<sup id=\"cite_ref-56\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-56\"><span class=\"cite-bracket\">[</span>56<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Participants receive Linux training that is vendor-neutral and created with oversight from leaders of the Linux development community. The Linux Foundation\'s online and in-person training programs aim to deliver broad, foundational knowledge and networking opportunities.</p>\r\n<p>In March 2014, the Linux Foundation and&nbsp;<a title=\"EdX\" href=\"https://en.wikipedia.org/wiki/EdX\">edX</a>&nbsp;partnered to offer a free, massive open online class titled Introduction to Linux.<sup id=\"cite_ref-57\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-57\"><span class=\"cite-bracket\">[</span>57<span class=\"cite-bracket\">]</span></a></sup>&nbsp;This was the first in a series of ongoing free offerings from both organizations whose current catalogue of&nbsp;<a title=\"Massive open online course\" href=\"https://en.wikipedia.org/wiki/Massive_open_online_course\">MOOCs</a>&nbsp;include Intro to DevOps, Intro to Cloud Foundry and Cloud Native Software Architecture, Intro to Apache Hadoop, Intro to Cloud Infrastructure Technologies, and Intro to OpenStack.<sup id=\"cite_ref-58\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-58\"><span class=\"cite-bracket\">[</span>58<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>In December 2015, the Linux Foundation introduced a self-paced course designed to help prepare administrators for the OpenStack Foundation\'s Certified OpenStack Administrator exam.<sup id=\"cite_ref-59\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-59\"><span class=\"cite-bracket\">[</span>59<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>As part of a partnership with Microsoft, it was announced in December 2015 that the Linux on Azure certification would be awarded to individuals who pass both the Microsoft Exam 70-533 (Implementing Microsoft Azure Infrastructure Solutions) and the Linux Foundation Certified System Administrator (LFCS) exam.<sup id=\"cite_ref-60\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-60\"><span class=\"cite-bracket\">[</span>60<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>In early 2017, at the annual Open Source Leadership Summit, it was announced that the Linux Foundation would begin offering an Inclusive Speaker Orientation course in partnership with the National Center for Women &amp; Information Technology. The course is designed to give participants \"practical skills to promote inclusivity in their presentations.\"<sup id=\"cite_ref-61\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-61\"><span class=\"cite-bracket\">[</span>61<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>In September 2020, the Linux Foundation released a free&nbsp;<a title=\"Serverless computing\" href=\"https://en.wikipedia.org/wiki/Serverless_computing\">serverless computing</a>&nbsp;training course with CNCF. It is taught by Alex Ellis, founder of OpenFaaS.<sup id=\"cite_ref-62\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-62\"><span class=\"cite-bracket\">[</span>62<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Among many other organizations with similar offerings, The Linux Foundation has reported a 40% increase in demand for their online courses in 2020 during the coronavirus pandemic and the resulting social-distancing measures.<sup id=\"cite_ref-63\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-63\"><span class=\"cite-bracket\">[</span>63<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Patent_Commons_Project\">Patent Commons Project</h3>\r\n</div>\r\n<p>The&nbsp;<em>patent commons</em>&nbsp;consists of all&nbsp;<a title=\"Patent\" href=\"https://en.wikipedia.org/wiki/Patent\">patented</a>&nbsp;<a title=\"Software\" href=\"https://en.wikipedia.org/wiki/Software\">software</a>&nbsp;which has been made available to the&nbsp;<a class=\"mw-redirect\" title=\"Open-source model\" href=\"https://en.wikipedia.org/wiki/Open-source_model\">open source</a>&nbsp;community. For software to be considered to be in the&nbsp;<a title=\"Commons\" href=\"https://en.wikipedia.org/wiki/Commons\">commons</a>&nbsp;the patent owner must guarantee that developers will not be sued for infringement, though there may be some restrictions on the use of the patented code. The concept was first given substance by&nbsp;<a title=\"Red Hat\" href=\"https://en.wikipedia.org/wiki/Red_Hat\">Red Hat</a>&nbsp;in 2001 when it published its Patent Promise.<sup id=\"cite_ref-64\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-64\"><span class=\"cite-bracket\">[</span>64<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The Patent Commons Project was launched on November 15, 2005, by the&nbsp;<a class=\"mw-redirect\" title=\"OSDL\" href=\"https://en.wikipedia.org/wiki/OSDL\">Open Source Development Labs</a>&nbsp;(OSDL). The core of the project is an&nbsp;<a title=\"Internet\" href=\"https://en.wikipedia.org/wiki/Internet\">online</a>&nbsp;patent commons reference&nbsp;<a title=\"Library\" href=\"https://en.wikipedia.org/wiki/Library\">library</a>&nbsp;aggregating and documenting information about patent-related&nbsp;<a title=\"Pledge (law)\" href=\"https://en.wikipedia.org/wiki/Pledge_(law)\">pledges</a>&nbsp;and other&nbsp;<a title=\"Law\" href=\"https://en.wikipedia.org/wiki/Law\">legal</a>&nbsp;solutions directed at the open-source software community. As of 2015, the project listed 53 patents.<sup id=\"cite_ref-65\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-65\"><span class=\"cite-bracket\">[</span>65<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Open_Compliance_Program\">Open Compliance Program</h3>\r\n</div>\r\n<p>The Linux Foundation\'s Open Compliance Program provides an array of programs for open-source software licensing compliance. The focus of this initiative is to educate and assist developers (and their companies) on licensing requirements, to make it easier to create new software. The program consists primarily of self-administered training modules, but it is also meant to include automated tools to help programmatically identify license compliance issues.<sup id=\"cite_ref-66\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-66\"><span class=\"cite-bracket\">[</span>66<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Funding\">Funding</h2>\r\n</div>\r\n<p>Funding for the Linux Foundation comes primarily from its Platinum Members, who pay US$500,000 per year according to Schedule A in LF\'s bylaws,<sup id=\"cite_ref-67\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-67\"><span class=\"cite-bracket\">[</span>67<span class=\"cite-bracket\">]</span></a></sup>&nbsp;adding up to US$7.5 million.<sup id=\"cite_ref-68\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-68\"><span class=\"cite-bracket\">[</span>68<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The Gold Members contribute a combined total of US$1.2 million and Silver members contribute between US$5,000 and US$20,000 based on the amount of employees, summing up to at least US$6,240,000.<sup id=\"cite_ref-69\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-69\"><span class=\"cite-bracket\">[</span>69<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>In December 2023, the&nbsp;<a title=\"Open Networking Foundation\" href=\"https://en.wikipedia.org/wiki/Open_Networking_Foundation\">Open Networking Foundation (ONF)</a>, including its LF Broadband, Aether and P4 projects, merged with Linux Foundation. As part of the merger, ONF handed over $5 million in funding.<sup id=\"cite_ref-70\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-70\"><span class=\"cite-bracket\">[</span>70<span class=\"cite-bracket\">]</span></a></sup>&nbsp;As of June 2024, the foundation collected annual fees worth at least US$14,940,000.<sup id=\"cite_ref-71\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-71\"><span class=\"cite-bracket\">[</span>71<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Use_of_donations\">Use of donations</h3>\r\n</div>\r\n<p>By early 2018, the Linux Foundation\'s website stated that it \"uses [donations] in part to help fund the infrastructure and fellows (like&nbsp;<a title=\"Linus Torvalds\" href=\"https://en.wikipedia.org/wiki/Linus_Torvalds\">Linus Torvalds</a>) who help develop the Linux kernel.\"<sup id=\"cite_ref-72\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-72\"><span class=\"cite-bracket\">[</span>72<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Sub-organizations\">Sub-organizations</h2>\r\n</div>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Linux_Foundation_Europe\">Linux Foundation Europe</h3>\r\n</div>\r\n<p>The Linux Foundation established the Linux Foundation Europe, with its headquarter located in&nbsp;<a title=\"Brussels\" href=\"https://en.wikipedia.org/wiki/Brussels\">Brussels</a>, on September 14, 2022, with the aim of promoting open source throughout Europe. Linux Foundation Europe will increase open collaborative activities for all European stakeholders, including citizens, the public sector, and the private sector. Among the first members of the Linux Foundation Europe are&nbsp;<a title=\"Ericsson\" href=\"https://en.wikipedia.org/wiki/Ericsson\">Ericsson</a>,&nbsp;<a title=\"Accenture\" href=\"https://en.wikipedia.org/wiki/Accenture\">Accenture</a>, Alliander,&nbsp;<a title=\"Avast\" href=\"https://en.wikipedia.org/wiki/Avast\">Avast</a>,&nbsp;<a title=\"Bosch (company)\" href=\"https://en.wikipedia.org/wiki/Bosch_(company)\">Bosch</a>, BTP, esatus AG,&nbsp;<a title=\"NXP Semiconductors\" href=\"https://en.wikipedia.org/wiki/NXP_Semiconductors\">NXP Semiconductors</a>, RTE,&nbsp;<a title=\"SAP\" href=\"https://en.wikipedia.org/wiki/SAP\">SAP</a>,&nbsp;<a title=\"SUSE S.A.\" href=\"https://en.wikipedia.org/wiki/SUSE_S.A.\">SUSE S.A</a>.,&nbsp;<a title=\"TomTom\" href=\"https://en.wikipedia.org/wiki/TomTom\">TomTom</a>,&nbsp;<a title=\"Bank of England\" href=\"https://en.wikipedia.org/wiki/Bank_of_England\">Bank of England</a>,&nbsp;<a title=\"OpenForum Europe\" href=\"https://en.wikipedia.org/wiki/OpenForum_Europe\">OpenForum Europe</a>,&nbsp;<a title=\"OpenUK\" href=\"https://en.wikipedia.org/wiki/OpenUK\">OpenUK</a>, and the&nbsp;<a title=\"Research Institutes of Sweden\" href=\"https://en.wikipedia.org/wiki/Research_Institutes_of_Sweden\">Research Institutes of Sweden</a>. The Linux Foundation Europe will make it possible for open collaborative projects to be housed on European soil.<sup id=\"cite_ref-73\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-73\"><span class=\"cite-bracket\">[</span>73<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-74\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-74\"><span class=\"cite-bracket\">[</span>74<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The first initiative is the&nbsp;<a class=\"new\" title=\"Open Wallet Foundation (page does not exist)\" href=\"https://en.wikipedia.org/w/index.php?title=Open_Wallet_Foundation&amp;action=edit&amp;redlink=1\">Open Wallet Foundation</a>&nbsp;(OWF), which aims to create an interoperable engine for digital wallets that supports payment processing, identity verification, and storing verified credentials including employment, education, financial status, and entitlements was launched on 23 February 2023. The inaugural members are Accenture,&nbsp;<a title=\"Gen Digital\" href=\"https://en.wikipedia.org/wiki/Gen_Digital\">Gen Digital</a>, Futurewei Technologies,&nbsp;<a title=\"Visa Inc.\" href=\"https://en.wikipedia.org/wiki/Visa_Inc.\">Visa Inc.</a>,&nbsp;<a title=\"American Express\" href=\"https://en.wikipedia.org/wiki/American_Express\">American Express</a>,&nbsp;<a title=\"Deutsche Telekom\" href=\"https://en.wikipedia.org/wiki/Deutsche_Telekom\">Deutsche Telekom</a>&nbsp;/&nbsp;<a title=\"T-Systems\" href=\"https://en.wikipedia.org/wiki/T-Systems\">T-Systems</a>, esatus AG, Fynbos, Hopae, IAMX, IDnow, IndyKite, Intesi Group,&nbsp;<a title=\"Ping Identity\" href=\"https://en.wikipedia.org/wiki/Ping_Identity\">Ping Identity</a>, Digital Identification and Authentication Council of Canada (DIACC), Digital Dollar Project, Digital Identity New Zealand (DINZ), Digital Identity and Data Sovereignty Association (DIDAS), DizmeID Foundation (DIZME), Hyperledger Foundation, Information Technologies and Telematics Institute / Centre for Research and Technology Hellas (CERTH/ITI),&nbsp;<a title=\"Johannes Kepler University Linz\" href=\"https://en.wikipedia.org/wiki/Johannes_Kepler_University_Linz\">Johannes Kepler University Linz</a>,&nbsp;<a title=\"ID2020\" href=\"https://en.wikipedia.org/wiki/ID2020\">ID2020</a>, IDunion SCE,&nbsp;<a title=\"Mifos Initiative\" href=\"https://en.wikipedia.org/wiki/Mifos_Initiative\">Mifos Initiative</a>, MIT Connection Science, Modular Open Source Identity Platform (MOSIP),&nbsp;<a class=\"mw-redirect\" title=\"OpenID Foundation\" href=\"https://en.wikipedia.org/wiki/OpenID_Foundation\">OpenID Foundation</a>,&nbsp;<a title=\"Open Identity Exchange\" href=\"https://en.wikipedia.org/wiki/Open_Identity_Exchange\">Open Identity Exchange</a>&nbsp;(OIX), Secure Identity Alliance (SIA),&nbsp;<a title=\"University of Rovira i Virgili\" href=\"https://en.wikipedia.org/wiki/University_of_Rovira_i_Virgili\">University of Rovira i Virgili</a>, and the Trust Over IP Foundation (ToIP).<sup id=\"cite_ref-75\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-75\"><span class=\"cite-bracket\">[</span>75<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-76\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-76\"><span class=\"cite-bracket\">[</span>76<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The Linux Foundation Europe started the&nbsp;<a title=\"RISC-V\" href=\"https://en.wikipedia.org/wiki/RISC-V\">RISC-V</a>&nbsp;Software Ecosystem (RISE) initiative on May 31, 2023. The goal of RISE is to increase the availability of software for high-performance and power-efficient RISC-V processors running high-level operating systems for a range of market segments by bringing together a large number of hardware and software vendors. Red Hat,&nbsp;<a title=\"Samsung\" href=\"https://en.wikipedia.org/wiki/Samsung\">Samsung</a>,&nbsp;<a title=\"Qualcomm\" href=\"https://en.wikipedia.org/wiki/Qualcomm\">Qualcomm</a>,&nbsp;<a title=\"Nvidia\" href=\"https://en.wikipedia.org/wiki/Nvidia\">Nvidia</a>,&nbsp;<a title=\"MediaTek\" href=\"https://en.wikipedia.org/wiki/MediaTek\">MediaTek</a>,&nbsp;<a title=\"Intel\" href=\"https://en.wikipedia.org/wiki/Intel\">Intel</a>, and Google are among the initial members.<sup id=\"cite_ref-77\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-77\"><span class=\"cite-bracket\">[</span>77<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Linux_Foundation_India\">Linux Foundation India</h3>\r\n</div>\r\n<p>During KubeCon + CloudNativeCon India in&nbsp;<a title=\"New Delhi\" href=\"https://en.wikipedia.org/wiki/New_Delhi\">New Delhi</a>, the Linux Foundation announced the opening of Linux Foundation India on 11 December 2024, which will work on subjects including blockchain, security, Edge/IoT, cloud native technologies, telecommunications, and domain-specific artificial intelligence.<sup id=\"cite_ref-78\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-78\"><span class=\"cite-bracket\">[</span>78<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-79\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-79\"><span class=\"cite-bracket\">[</span>79<span class=\"cite-bracket\">]</span></a></sup>&nbsp;In India, the need for open-source technology has increased by 42% in 2023 as a result of the Linux Foundation\'s partnership with the International Startup Foundation (ISF). They are also collaborating with the open source networking company OpenNets.<sup id=\"cite_ref-80\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-80\"><span class=\"cite-bracket\">[</span>80<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-:0_81-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-:0-81\"><span class=\"cite-bracket\">[</span>81<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Through the LF Decentralized Trust, the&nbsp;<a title=\"Reserve Bank of India\" href=\"https://en.wikipedia.org/wiki/Reserve_Bank_of_India\">Reserve Bank of India</a>&nbsp;(RBI) and the&nbsp;<a title=\"Ministry of Electronics and Information Technology\" href=\"https://en.wikipedia.org/wiki/Ministry_of_Electronics_and_Information_Technology\">Ministry of Electronics and Information Technology</a>&nbsp;(MEITy) are utilizing Linux Foundation\'s projects to build the&nbsp;<a class=\"new\" title=\"National Blockchain Framework (page does not exist)\" href=\"https://en.wikipedia.org/w/index.php?title=National_Blockchain_Framework&amp;action=edit&amp;redlink=1\">National Blockchain Framework</a>&nbsp;and&nbsp;<a title=\"Digital rupee\" href=\"https://en.wikipedia.org/wiki/Digital_rupee\">Digital Rupee</a>.<sup id=\"cite_ref-82\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-82\"><span class=\"cite-bracket\">[</span>82<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-:0_81-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-:0-81\"><span class=\"cite-bracket\">[</span>81<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The Linux Foundation India will launch projects that will be introduced straight upstream into the Linux Foundation further facilitating ongoing technological collaborations between the&nbsp;<a title=\"Federal government of the United States\" href=\"https://en.wikipedia.org/wiki/Federal_government_of_the_United_States\">Federal Government of the United States</a>&nbsp;and the&nbsp;<a title=\"Government of India\" href=\"https://en.wikipedia.org/wiki/Government_of_India\">Government of India</a>, in contrast to the Linux Foundation Europe and Linux Foundation Japan, which focus on region-specific open source projects because of governmental constraints. Linux Foundation India will provide open source contributors to the Linux Foundation\'s sub-organizations.<sup id=\"cite_ref-83\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-83\"><span class=\"cite-bracket\">[</span>83<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-:0_81-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Linux_Foundation#cite_note-:0-81\"><span class=\"cite-bracket\">[</span>81<span class=\"cite-bracket\">]</span></a></sup></p>', 'North America, U.S', '2025-09-24', '2025-09-28', '1', '2025-09-25 01:15:48', '2025-09-25 01:28:34');
INSERT INTO `events` (`id`, `title`, `image`, `event_slug`, `event_desc`, `location`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Open coopetition', 'events/zJnWY0fjAsmLf7EBxcEv3gMgGjsYXFnwLhrEP2FR.png', 'open-coopetition', '<p>In&nbsp;<a title=\"R&amp;D management\" href=\"https://en.wikipedia.org/wiki/R%26D_management\">R&amp;D management</a>&nbsp;and&nbsp;<a class=\"mw-redirect\" title=\"Systems development\" href=\"https://en.wikipedia.org/wiki/Systems_development\">systems development</a>,&nbsp;<strong>open coopetition</strong>&nbsp;or&nbsp;<strong>open-coopetition</strong>&nbsp;is a&nbsp;<a title=\"Neologism\" href=\"https://en.wikipedia.org/wiki/Neologism\">neologism</a>&nbsp;to describe cooperation among competitors in the open-source arena. The term was first coined by the scholars Jose Teixeira and Tingting Lin to describe how rival firms that, while competing with similar products in the same markets, cooperate which each other in the development of open-source projects (e.g.,&nbsp;<a title=\"Apple Inc.\" href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple</a>,&nbsp;<a title=\"Samsung\" href=\"https://en.wikipedia.org/wiki/Samsung\">Samsung</a>,&nbsp;<a title=\"Google\" href=\"https://en.wikipedia.org/wiki/Google\">Google</a>,&nbsp;<a title=\"Nokia\" href=\"https://en.wikipedia.org/wiki/Nokia\">Nokia</a>) in the co-development of&nbsp;<a title=\"WebKit\" href=\"https://en.wikipedia.org/wiki/WebKit\">WebKit</a>.<sup id=\"cite_ref-TeixeiraAndLin2014_1-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-TeixeiraAndLin2014-1\"><span class=\"cite-bracket\">[</span>1<span class=\"cite-bracket\">]</span></a></sup>&nbsp;More recently, open coopetition started also being used also to refer to strategic approaches where competing organizations collaborate on open innovation initiatives while maintaining their competitive market positions.<sup id=\"cite_ref-Roy_et_al_2018_2-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Roy_et_al_2018-2\"><span class=\"cite-bracket\">[</span>2<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>Open-coopetition is a&nbsp;<a title=\"Compound (linguistics)\" href=\"https://en.wikipedia.org/wiki/Compound_(linguistics)\">compound-word</a>&nbsp;term bridging&nbsp;<a title=\"Coopetition\" href=\"https://en.wikipedia.org/wiki/Coopetition\">coopetition</a>&nbsp;and&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>.&nbsp;<a title=\"Coopetition\" href=\"https://en.wikipedia.org/wiki/Coopetition\">Coopetition</a>&nbsp;refers to a paradoxical relationship between two or more actors simultaneously involved in cooperative and competitive interactions;<sup id=\"cite_ref-BengtssonANDKock2000_3-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-BengtssonANDKock2000-3\"><span class=\"cite-bracket\">[</span>3<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-BengtssonANDKock2014_4-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-BengtssonANDKock2014-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup>&nbsp;and&nbsp;<a title=\"Open-source software development\" href=\"https://en.wikipedia.org/wiki/Open-source_software_development\">open-source</a>&nbsp;both as a development method that emphasizes transparency and collaboration, and as a&nbsp;<a title=\"Private-collective model of innovation\" href=\"https://en.wikipedia.org/wiki/Private-collective_model_of_innovation\">\"private-collective\" innovation model</a>&nbsp;with features both from the&nbsp;<a class=\"mw-redirect\" title=\"Investment capital\" href=\"https://en.wikipedia.org/wiki/Investment_capital\">private investment</a>&nbsp;and&nbsp;<a title=\"Collective action\" href=\"https://en.wikipedia.org/wiki/Collective_action\">collective action</a><sup id=\"cite_ref-vonKrogh_and_vonHippel2003_5-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-vonKrogh_and_vonHippel2003-5\"><span class=\"cite-bracket\">[</span>5<span class=\"cite-bracket\">]</span></a></sup>&nbsp;&mdash; firms contribute towards the creation of public goods while giving up associated intellectual property rights such patents, copyright, licenses, or trade secrets.</p>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Integrating_open-coopetition_in_practice.svg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Integrating_open-coopetition_in_practice.svg/330px-Integrating_open-coopetition_in_practice.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/8/88/Integrating_open-coopetition_in_practice.svg/500px-Integrating_open-coopetition_in_practice.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/88/Integrating_open-coopetition_in_practice.svg/960px-Integrating_open-coopetition_in_practice.svg.png 2x\" alt=\"open-coopetition in practice maximizes transparency\" width=\"310\" height=\"233\" data-file-width=\"992\" data-file-height=\"744\"></a>\r\n<figcaption>Situating open-coopetition in practice.</figcaption>\r\n</figure>\r\n<p>By exploring coopetition in the particular context of&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>,&nbsp;<a class=\"mw-redirect\" title=\"Open-coopetition\" href=\"https://en.wikipedia.org/wiki/Open-coopetition\">Open-coopetition</a>&nbsp;emphasizes&nbsp;<a title=\"Transparency (behavior)\" href=\"https://en.wikipedia.org/wiki/Transparency_(behavior)#Technology\">transparency on the co-development of technological artifacts</a>&nbsp;that become available to the public under an&nbsp;<a title=\"Open-source license\" href=\"https://en.wikipedia.org/wiki/Open-source_license\">open-source license</a>&mdash;allowing anyone to freely obtain, study, modify and redistribute them. Within&nbsp;<a class=\"mw-redirect\" title=\"Open-coopetition\" href=\"https://en.wikipedia.org/wiki/Open-coopetition\">open-coopetition</a>,&nbsp;<a title=\"Transparency (behavior)\" href=\"https://en.wikipedia.org/wiki/Transparency_(behavior)#Technology\">development transparency</a>&nbsp;and&nbsp;<a title=\"Sense of community\" href=\"https://en.wikipedia.org/wiki/Sense_of_community\">sense of community</a>&nbsp;are maximized; while the&nbsp;<a title=\"Control (management)\" href=\"https://en.wikipedia.org/wiki/Control_(management)\">managerial control</a>&nbsp;and&nbsp;<a title=\"Intellectual property\" href=\"https://en.wikipedia.org/wiki/Intellectual_property\">IP enforcement</a>&nbsp;are minimized. Open-coopetitive relationships are paradoxical as the core managerial concepts of property, contract and price play an outlier role.</p>\r\n<p>The&nbsp;<a title=\"Openness\" href=\"https://en.wikipedia.org/wiki/Openness\">openness characteristic</a>&nbsp;of open-source projects also distinguishes open-coopetition from other forms of&nbsp;<a title=\"Strategic alliance\" href=\"https://en.wikipedia.org/wiki/Strategic_alliance\">cooperative arrangements</a>&nbsp;by its inclusiveness: Everybody can contribute. Users or other contributors do not need to hold a supplier contract or sign a legal&nbsp;<a title=\"Intellectual property\" href=\"https://en.wikipedia.org/wiki/Intellectual_property\">intellectual property</a>&nbsp;arrangement to contribute. Moreover, neither to be a member of a particular firm or affiliated with a particular&nbsp;<a title=\"Joint venture\" href=\"https://en.wikipedia.org/wiki/Joint_venture\">joint venture</a>&nbsp;or&nbsp;<a class=\"mw-redirect\" title=\"Consortia\" href=\"https://en.wikipedia.org/wiki/Consortia\">consortia</a>&nbsp;to be able to contribute. In the words of&nbsp;<a class=\"mw-redirect\" title=\"Massimo Banzi\" href=\"https://en.wikipedia.org/wiki/Massimo_Banzi\">Massimo Banzi</a>, \"You don\'t need anyone\'s permission to make something great\".<sup id=\"cite_ref-6\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>More recently&nbsp;<a class=\"mw-redirect\" title=\"Open-coopetition\" href=\"https://en.wikipedia.org/wiki/Open-coopetition\">open-coopetition</a>&nbsp;is used to describe&nbsp;<a class=\"mw-redirect\" title=\"Open-innovation\" href=\"https://en.wikipedia.org/wiki/Open-innovation\">open-innovation</a>&nbsp;among competitors more broadly with many cases out of the&nbsp;<a title=\"Software industry\" href=\"https://en.wikipedia.org/wiki/Software_industry\">software industry</a>.<sup id=\"cite_ref-Roy_et_al_2018_2-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Roy_et_al_2018-2\"><span class=\"cite-bracket\">[</span>2<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-RoyChesbrough2018_7-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-RoyChesbrough2018-7\"><span class=\"cite-bracket\">[</span>7<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-Roth_et_al2019_8-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Roth_et_al2019-8\"><span class=\"cite-bracket\">[</span>8<span class=\"cite-bracket\">]</span></a></sup>&nbsp;While some authors use&nbsp;<a class=\"mw-redirect\" title=\"Open-coopetition\" href=\"https://en.wikipedia.org/wiki/Open-coopetition\">open-coopetition</a>&nbsp;to emphasize the production of&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source software</a>&nbsp;among competitors, others use open-coopetition to emphasis&nbsp;<a class=\"mw-redirect\" title=\"Open-innovation\" href=\"https://en.wikipedia.org/wiki/Open-innovation\">open-innovation</a>&nbsp;among competitors.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"History\">History</h2>\r\n</div>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2008\">2008</h3>\r\n</div>\r\n<p>In a large-scale study involving multiple European-based software intensive firms, the scholars P&auml;r &Aring;gerfalk and Brian Fitzgerald revealed a shift from \"<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>&nbsp;as a community of individual developers to&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>&nbsp;as a community of commercial organizations, primarily small and medium-sized enterprises, operating as a symbiotic ecosystem in a spirit of&nbsp;<a title=\"Coopetition\" href=\"https://en.wikipedia.org/wiki/Coopetition\">coopetition</a>\".<sup id=\"cite_ref-Agerfalk_and_Fitzgeral2008_9-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Agerfalk_and_Fitzgeral2008-9\"><span class=\"cite-bracket\">[</span>9<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Even if they were exploring&nbsp;<a class=\"mw-redirect\" title=\"Open-sourcing\" href=\"https://en.wikipedia.org/wiki/Open-sourcing\">open-sourcing</a>&nbsp;as \"a novel and unconventional approach to global sourcing and&nbsp;<a title=\"Coopetition\" href=\"https://en.wikipedia.org/wiki/Coopetition\">coopetition</a>\", they captured the following quote that highlights that competition in the open-source arena is not as in business as usual.</p>\r\n<blockquote>\r\n<p>\"In a traditional market you don\'t call up your competitor and be like, oh, well tell me what your stuff does. But in open source you do.\" [Open Source Program Director, at&nbsp;<a title=\"IONA Technologies\" href=\"https://en.wikipedia.org/wiki/IONA_Technologies\">IONA</a>]<sup id=\"cite_ref-Agerfalk_and_Fitzgeral2008_9-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Agerfalk_and_Fitzgeral2008-9\"><span class=\"cite-bracket\">[</span>9<span class=\"cite-bracket\">]</span></a></sup></p>\r\n</blockquote>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2012\">2012</h3>\r\n</div>\r\n<p>Also in the academic world, and after following a&nbsp;<a title=\"Software company\" href=\"https://en.wikipedia.org/wiki/Software_company\">software company</a>&nbsp;based in Norway for over five years, and while theorizing on the concept of&nbsp;<a title=\"Software ecosystem\" href=\"https://en.wikipedia.org/wiki/Software_ecosystem\">software ecosystem</a>, the academic Geir K. Hanssen noted that the characteristic networks of a&nbsp;<a title=\"Software ecosystem\" href=\"https://en.wikipedia.org/wiki/Software_ecosystem\">software ecosystem</a>, open-source or proprietary ones, can embed competing organizations.</p>\r\n<blockquote>\r\n<p>\"Software ecosystems have a networked character. CSoft and its external environment constitute a network of customers and third party organizations. Even competitors may be considered a part of this network, although this aspect has not been studied in particular here.\"<sup id=\"cite_ref-Hanssen2012_10-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Hanssen2012-10\"><span class=\"cite-bracket\">[</span>10<span class=\"cite-bracket\">]</span></a></sup></p>\r\n</blockquote>\r\n<p>In an opinion article entitled Open Source Coopetition Fueled by Linux Foundation Growth, the journalist and market analyst Jay Lyman highlights that \"working with direct rivals may have been unthinkable 10 years ago, but&nbsp;<a title=\"Linux\" href=\"https://en.wikipedia.org/wiki/Linux\">Linux</a>,&nbsp;<a class=\"mw-redirect\" title=\"Open Source Software\" href=\"https://en.wikipedia.org/wiki/Open_Source_Software\">open-source</a>&nbsp;and organizations such as&nbsp;<a title=\"Linux Foundation\" href=\"https://en.wikipedia.org/wiki/Linux_Foundation\">the Linux Foundation</a>&nbsp;have highlighted how solving common problems and easing customer pain and friction in using and choosing different technologies can truly drive innovation and traction in the market.\"<sup id=\"cite_ref-11\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-11\"><span class=\"cite-bracket\">[</span>11<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The term \"open source coopetition\" was employed to highlight the role of the&nbsp;<a title=\"Linux Foundation\" href=\"https://en.wikipedia.org/wiki/Linux_Foundation\">Linux Foundation</a>&nbsp;as a mediator of collaboration among rival firms.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2013\">2013</h3>\r\n</div>\r\n<p>At the OpenStack summit in&nbsp;<a title=\"Hong Kong\" href=\"https://en.wikipedia.org/wiki/Hong_Kong\">Hong Kong</a>, the co-founder of&nbsp;<a title=\"Mirantis\" href=\"https://en.wikipedia.org/wiki/Mirantis\">Mirantis</a>&nbsp;Boris Renski talked about his job on figuring out how to co-opete in the crowded OpenStack open-source community. In a 43-minute broadcast video, Boris Renski shed some light on OpenStack coopetition politics and shared a subjective view on strategies of individual players within the OpenStack community (e.g.,&nbsp;<a class=\"mw-redirect\" title=\"Rackspace\" href=\"https://en.wikipedia.org/wiki/Rackspace\">Rackspace</a>,&nbsp;<a title=\"Mirantis\" href=\"https://en.wikipedia.org/wiki/Mirantis\">Mirantis</a>,&nbsp;<a title=\"IBM\" href=\"https://en.wikipedia.org/wiki/IBM\">IBM</a>,&nbsp;<a title=\"Hewlett Packard Enterprise\" href=\"https://en.wikipedia.org/wiki/Hewlett_Packard_Enterprise\">HP</a>&nbsp;and&nbsp;<a title=\"Red Hat\" href=\"https://en.wikipedia.org/wiki/Red_Hat\">Red Hat</a>&nbsp;among others).<sup id=\"cite_ref-12\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-12\"><span class=\"cite-bracket\">[</span>12<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The&nbsp;<a title=\"Mirantis\" href=\"https://en.wikipedia.org/wiki/Mirantis\">Mirantis</a>&nbsp;co-founder provided a rich description of an open-source community working in co-opetition.</p>\r\n<p>Along with this lines, the pioneering scholarly work of Germonprez et al. (2013)<sup id=\"cite_ref-Germonprez_et_al2013_13-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-Germonprez_et_al2013-13\"><span class=\"cite-bracket\">[</span>13<span class=\"cite-bracket\">]</span></a></sup>&nbsp;reported on how key business actors within the financial services industry that traditionally viewed&nbsp;<a title=\"Open-source software movement\" href=\"https://en.wikipedia.org/wiki/Open-source_software_movement\">open-source software</a>&nbsp;with skepticism, tied up an&nbsp;<a title=\"Open-source software movement\" href=\"https://en.wikipedia.org/wiki/Open-source_software_movement\">open-source</a>&nbsp;&lsquo;community of competitors&rsquo;. By taking the case of&nbsp;<a class=\"external text\" href=\"http://www.openmama.org/\" rel=\"nofollow\">OpenMAMA</a>, a&nbsp;<a title=\"Middleware\" href=\"https://en.wikipedia.org/wiki/Middleware\">Middleware</a>&nbsp;Agnostic Messaging&nbsp;<a title=\"API\" href=\"https://en.wikipedia.org/wiki/API\">API</a>&nbsp;used by some of the world\'s largest financial players, they show that corporate market rivals (e.g.,&nbsp;<a title=\"J. P. Morgan\" href=\"https://en.wikipedia.org/wiki/J._P._Morgan\">J. P. Morgan</a>,&nbsp;<a title=\"Bank of America\" href=\"https://en.wikipedia.org/wiki/Bank_of_America\">Bank of America</a>,&nbsp;<a title=\"IBM\" href=\"https://en.wikipedia.org/wiki/IBM\">IBM</a>&nbsp;and&nbsp;<a title=\"BMC Software\" href=\"https://en.wikipedia.org/wiki/BMC_Software\">BMC</a>) can coexist in&nbsp;<a title=\"Open-source software movement\" href=\"https://en.wikipedia.org/wiki/Open-source_software_movement\">open-source communities</a>, and intentionally coordinate activities or mutual benefits in precise, market focused, and non-differentiating engagements. Their work pointed out that high-competitive capital-oriented industries do not epitomize the traditional and grassroots idea that&nbsp;<a title=\"Open-source software movement\" href=\"https://en.wikipedia.org/wiki/Open-source_software_movement\">open-source software</a>&nbsp;was originally born from. Furthermore, they argued that&nbsp;<a title=\"Open-source software movement\" href=\"https://en.wikipedia.org/wiki/Open-source_software_movement\">open-source communities</a>&nbsp;can be deliberately designed to include competing vendors and customers under neutral institutional structures (e.g., foundations and steering committees).</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2014\">2014</h3>\r\n</div>\r\n<p>In an academic paper entitled \"Collaboration in the open-source arena: The WebKit case\", the scholars Jose Teixeira and Tingting Lin executed an&nbsp;<a title=\"Ethnography\" href=\"https://en.wikipedia.org/wiki/Ethnography\">ethnographic</a>&nbsp;informed&nbsp;<a title=\"Social network analysis\" href=\"https://en.wikipedia.org/wiki/Social_network_analysis\">social network analysis</a>&nbsp;on the development of the&nbsp;<a title=\"WebKit\" href=\"https://en.wikipedia.org/wiki/WebKit\">WebKit</a>&nbsp;<a class=\"mw-redirect\" title=\"Open Source Software\" href=\"https://en.wikipedia.org/wiki/Open_Source_Software\">open-source</a>&nbsp;<a title=\"Web navigation\" href=\"https://en.wikipedia.org/wiki/Web_navigation\">web browsing</a>&nbsp;technologies. Among a set of the reported findings, they pointed out that even if&nbsp;<a title=\"Apple Inc.\" href=\"https://en.wikipedia.org/wiki/Apple_Inc.\">Apple</a>&nbsp;and&nbsp;<a title=\"Samsung\" href=\"https://en.wikipedia.org/wiki/Samsung\">Samsung</a>&nbsp;were involved in expensive patent wars in the courts at the time, they still collaborated in the open-source arena. As some of the research results did not confirm prior research in&nbsp;<a title=\"Coopetition\" href=\"https://en.wikipedia.org/wiki/Coopetition\">coopetition</a>,<sup id=\"cite_ref-BengtssonANDKock2000_3-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-BengtssonANDKock2000-3\"><span class=\"cite-bracket\">[</span>3<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-BengtssonANDKock2014_4-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-BengtssonANDKock2014-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup>&nbsp;the authors proposed and coined the \"open-coopetition\" term while emphasizing the&nbsp;<a title=\"Openness\" href=\"https://en.wikipedia.org/wiki/Openness\">openness</a>&nbsp;of collaborating with competitors in the&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>&nbsp;arena.<sup id=\"cite_ref-TeixeiraAndLin2014_1-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-TeixeiraAndLin2014-1\"><span class=\"cite-bracket\">[</span>1<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2015\">2015</h3>\r\n</div>\r\n<p>By turning to&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>, the scholars Teixeira et al. (2015)<sup id=\"cite_ref-teixeira_et_al2015_14-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-teixeira_et_al2015-14\"><span class=\"cite-bracket\">[</span>14<span class=\"cite-bracket\">]</span></a></sup>&nbsp;went further and modeled and analyzed both collaborative and competitive networks from the&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>&nbsp;open-source project (a large and complex&nbsp;<a title=\"Cloud computing\" href=\"https://en.wikipedia.org/wiki/Cloud_computing\">cloud computing</a>&nbsp;infrastructure for&nbsp;<a title=\"Big data\" href=\"https://en.wikipedia.org/wiki/Big_data\">big data</a>). Somewhat surprising results point out that competition for the same&nbsp;<a title=\"Revenue model\" href=\"https://en.wikipedia.org/wiki/Revenue_model\">revenue model</a>&nbsp;(i.e., operating conflicting business models) does not necessarily affect collaboration within the&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack ecosystem</a>&mdash;in other words, competition among firms did not significantly influence collaboration among software developers affiliated with them. Furthermore, the expected social tendency of developers to work with developers from same firm (i.e.,&nbsp;<a title=\"Homophily\" href=\"https://en.wikipedia.org/wiki/Homophily\">homophily</a>) did not hold within the&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack ecosystem</a>. The case of&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>&nbsp;revealed to be much about genuine collaboration in software development besides ubiquitous competition among the firms that produce and use the software.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"2016\">2016</h3>\r\n</div>\r\n<p>A related study by Lin&aring;ker et al. (2016)<sup id=\"cite_ref-linaker_et_al2016_15-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-linaker_et_al2016-15\"><span class=\"cite-bracket\">[</span>15<span class=\"cite-bracket\">]</span></a></sup>&nbsp;analyzed the&nbsp;<a title=\"Apache Hadoop\" href=\"https://en.wikipedia.org/wiki/Apache_Hadoop\">Apache Hadoop</a>&nbsp;ecosystem in a quantitative longitudinal case study to investigate changing stakeholder influence and collaboration patterns. They found that the collaborative network had a quite stable number of network components (i.e., number of&nbsp;<a title=\"Community structure\" href=\"https://en.wikipedia.org/wiki/Community_structure\">sub-communities</a>&nbsp;within the community) with many unconnected stakeholders. Furthermore, such components were dominated by a core set of stakeholders that engaged in most of the collaborative relationships. As in&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>, there was much cooperation among competing and non-competing actors within the&nbsp;<a title=\"Apache Hadoop\" href=\"https://en.wikipedia.org/wiki/Apache_Hadoop\">Apache Hadoop</a>&nbsp;ecosystem&mdash;or in other words, firms with competing&nbsp;<a class=\"mw-redirect\" title=\"Business models\" href=\"https://en.wikipedia.org/wiki/Business_models\">business models</a>&nbsp;collaborate as openly as non-rivaling firms. Finally, they also argued that the openness of software ecosystems decreases the distance to competitors within the same ecosystem, it becomes possible and important to track what the competitors do within. Knowing about their existing collaborations, contributions, and interests in specific features offer valuable information about the competitors&rsquo; strategies and tactics.</p>\r\n<p>In a study addressing coopetition in the&nbsp;<a title=\"Cloud computing\" href=\"https://en.wikipedia.org/wiki/Cloud_computing\">cloud computing</a>&nbsp;industry, Teixeira et al.<sup id=\"cite_ref-teixeira_et_al_icis2016_16-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-teixeira_et_al_icis2016-16\"><span class=\"cite-bracket\">[</span>16<span class=\"cite-bracket\">]</span></a></sup>&nbsp;analyzed not only coopetition among individuals and organizations but also among&nbsp;<a class=\"mw-redirect\" title=\"Business networks\" href=\"https://en.wikipedia.org/wiki/Business_networks\">cohesive inter-organizational networks</a>. Relationships among individuals were modeled and visualized in 2D longitudinal visualizations and relationships among&nbsp;<a class=\"mw-redirect\" title=\"Business networks\" href=\"https://en.wikipedia.org/wiki/Business_networks\">inter-organizational networks</a>&nbsp;(e.g., alliances, consortium or ecosystem) were modeled and visualized in 3D longitudinal visualizations. The author added evidence to prior research<sup id=\"cite_ref-BengtssonANDKock2014_4-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Open_coopetition#cite_note-BengtssonANDKock2014-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup>&nbsp;suggesting that competition is a&nbsp;<a title=\"Multilevel model\" href=\"https://en.wikipedia.org/wiki/Multilevel_model\">multi-level phenomenon</a>&nbsp;that is influenced by individual-level, organizational-level, and network-level factors.</p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Coopetition_among_individuals_affiliated_with_firms.svg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Coopetition_among_individuals_affiliated_with_firms.svg/330px-Coopetition_among_individuals_affiliated_with_firms.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/6/61/Coopetition_among_individuals_affiliated_with_firms.svg/500px-Coopetition_among_individuals_affiliated_with_firms.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/61/Coopetition_among_individuals_affiliated_with_firms.svg/660px-Coopetition_among_individuals_affiliated_with_firms.svg.png 2x\" alt=\"&quot;Coopetition among individuals and firms&quot;\" width=\"330\" height=\"267\" data-file-width=\"817\" data-file-height=\"661\"></a>\r\n<figcaption>Coopetition among individuals affiliated with firms in the&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>&nbsp;software ecosystem.</figcaption>\r\n</figure>\r\n</td>\r\n<td>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Coopetition_within_a_dyad_of_software_ecosystems.png\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Coopetition_within_a_dyad_of_software_ecosystems.png/500px-Coopetition_within_a_dyad_of_software_ecosystems.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Coopetition_within_a_dyad_of_software_ecosystems.png/960px-Coopetition_within_a_dyad_of_software_ecosystems.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Coopetition_within_a_dyad_of_software_ecosystems.png/1000px-Coopetition_within_a_dyad_of_software_ecosystems.png 2x\" alt=\"&quot;Coopetition among ecosystems&quot;\" width=\"500\" height=\"281\" data-file-width=\"1920\" data-file-height=\"1080\"></a>\r\n<figcaption>Coopetition among a dyad of software ecosystems.</figcaption>\r\n</figure>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>By noting that many firms engaging into open-coopetition actively manage multiple portfolios of&nbsp;<a title=\"Strategic alliance\" href=\"https://en.wikipedia.org/wiki/Strategic_alliance\">alliances</a>&nbsp;in the software industry (i.e., many strategically contribute to multiple&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>&nbsp;<a title=\"Software ecosystem\" href=\"https://en.wikipedia.org/wiki/Software_ecosystem\">software ecosystems</a>) and by analyzing the co-evolution of&nbsp;<a title=\"OpenStack\" href=\"https://en.wikipedia.org/wiki/OpenStack\">OpenStack</a>&nbsp;and the&nbsp;<a class=\"mw-redirect\" title=\"CloudStack\" href=\"https://en.wikipedia.org/wiki/CloudStack\">CloudStack</a>&nbsp;<a title=\"Cloud computing\" href=\"https://en.wikipedia.org/wiki/Cloud_computing\">cloud computing</a>&nbsp;platforms, the same authors propose that development transparency and the weak intellectual property rights, two well-known characteristics of&nbsp;<a title=\"Open-source software\" href=\"https://en.wikipedia.org/wiki/Open-source_software\">open-source</a>&nbsp;<a title=\"Software ecosystem\" href=\"https://en.wikipedia.org/wiki/Software_ecosystem\">ecosystems</a>, allow an easier transfer of information and resources from one&nbsp;<a title=\"Strategic alliance\" href=\"https://en.wikipedia.org/wiki/Strategic_alliance\">alliance</a>&nbsp;to another. Even if openness enables a focal firm to transfer information and resources more easily between multiple&nbsp;<a title=\"Strategic alliance\" href=\"https://en.wikipedia.org/wiki/Strategic_alliance\">alliances</a>, such \'ease of transfer\' should not be seen as a source of&nbsp;<a title=\"Competitive advantage\" href=\"https://en.wikipedia.org/wiki/Competitive_advantage\">competitive advantage</a> as competitors can do the same.</p>', 'Dublin, Ireland (HQ)', '2025-09-01', '2025-09-30', '1', '2025-09-25 01:23:47', '2025-09-25 01:23:47'),
(3, 'Indigenous architecture', 'events/29pHMZCDE4WiN9aeXTMCRmF1kM6hvrXvlRZa8MLd.png', 'indigenous-architecture', '<p><strong>Indigenous architecture</strong>&nbsp;refers to the study and practice of&nbsp;<a title=\"Architecture\" href=\"https://en.wikipedia.org/wiki/Architecture\">architecture</a>&nbsp;of, for, and by&nbsp;<a title=\"Indigenous peoples\" href=\"https://en.wikipedia.org/wiki/Indigenous_peoples\">Indigenous peoples</a>.</p>\r\n<p>This field of study and practice in&nbsp;<a title=\"Australia\" href=\"https://en.wikipedia.org/wiki/Australia\">Australia</a>,&nbsp;<a title=\"Canada\" href=\"https://en.wikipedia.org/wiki/Canada\">Canada</a>, the&nbsp;<a title=\"Circumpolar peoples\" href=\"https://en.wikipedia.org/wiki/Circumpolar_peoples\">circumpolar</a>&nbsp;regions,&nbsp;<a title=\"New Zealand\" href=\"https://en.wikipedia.org/wiki/New_Zealand\">New Zealand</a>, the&nbsp;<a title=\"United States\" href=\"https://en.wikipedia.org/wiki/United_States\">United States</a>, and many other regions where Indigenous people have a built tradition or aspire translate or to have their cultures translated in the built environment. This has been extended to&nbsp;<a title=\"Landscape architecture\" href=\"https://en.wikipedia.org/wiki/Landscape_architecture\">landscape architecture</a>,&nbsp;<a title=\"Planning\" href=\"https://en.wikipedia.org/wiki/Planning\">planning</a>,&nbsp;<a title=\"Placemaking\" href=\"https://en.wikipedia.org/wiki/Placemaking\">placemaking</a>,&nbsp;<a title=\"Public art\" href=\"https://en.wikipedia.org/wiki/Public_art\">public art</a>,&nbsp;<a title=\"Urban design\" href=\"https://en.wikipedia.org/wiki/Urban_design\">urban design</a>, and other ways of contributing to the design of built environments. The term usually designates culture-specific architecture: it covers both the&nbsp;<a title=\"Vernacular architecture\" href=\"https://en.wikipedia.org/wiki/Vernacular_architecture\">vernacular architecture</a>&nbsp;and contemporary architecture inspired by the enculture, even when the latter includes features brought from outside.</p>\r\n<div class=\"mw-heading mw-heading2\">\r\n<h2 id=\"Australia\">Australia</h2>\r\n</div>\r\n<p>The traditional or&nbsp;<a title=\"Vernacular architecture\" href=\"https://en.wikipedia.org/wiki/Vernacular_architecture\">vernacular</a>&nbsp;architecture of&nbsp;<a title=\"Indigenous Australians\" href=\"https://en.wikipedia.org/wiki/Indigenous_Australians\">Indigenous Australians</a>, including&nbsp;<a title=\"Aboriginal Australians\" href=\"https://en.wikipedia.org/wiki/Aboriginal_Australians\">Aboriginal Australians</a>&nbsp;and&nbsp;<a title=\"Torres Strait Islanders\" href=\"https://en.wikipedia.org/wiki/Torres_Strait_Islanders\">Torres Strait Islanders</a>, varied to meet the&nbsp;<a class=\"mw-redirect\" title=\"Lifestyle (sociology)\" href=\"https://en.wikipedia.org/wiki/Lifestyle_(sociology)\">lifestyle</a>, social organisation, family size, cultural and climatic needs and resources available to each community.<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-1\"><span class=\"cite-bracket\">[</span>1<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Queensland-aboriginal-architecture-walater-roth.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Queensland-aboriginal-architecture-walater-roth.jpg/250px-Queensland-aboriginal-architecture-walater-roth.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Queensland-aboriginal-architecture-walater-roth.jpg/375px-Queensland-aboriginal-architecture-walater-roth.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/f/f5/Queensland-aboriginal-architecture-walater-roth.jpg 2x\" width=\"250\" height=\"334\" data-file-width=\"490\" data-file-height=\"654\"></a>\r\n<figcaption>Walter Roth: Studies of Aboriginal ethnoarchitectural forms, Queensland, 1897</figcaption>\r\n</figure>\r\n<figure class=\"mw-default-size mw-halign-left\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Aboriginal_boys_and_men_in_front_of_a_bush_shelter_-_NTL_PH0731-0022.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Aboriginal_boys_and_men_in_front_of_a_bush_shelter_-_NTL_PH0731-0022.jpg/250px-Aboriginal_boys_and_men_in_front_of_a_bush_shelter_-_NTL_PH0731-0022.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Aboriginal_boys_and_men_in_front_of_a_bush_shelter_-_NTL_PH0731-0022.jpg/500px-Aboriginal_boys_and_men_in_front_of_a_bush_shelter_-_NTL_PH0731-0022.jpg 1.5x\" width=\"250\" height=\"147\" data-file-width=\"900\" data-file-height=\"529\"></a>\r\n<figcaption>Indigenous Australian boys and men in front of a bush shelter,&nbsp;<a title=\"Groote Eylandt\" href=\"https://en.wikipedia.org/wiki/Groote_Eylandt\">Groote Eylandt</a>, circa 1933</figcaption>\r\n</figure>\r\n<figure class=\"mw-default-size\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Torres-strait-islanders_Shelter.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Torres-strait-islanders_Shelter.jpg/250px-Torres-strait-islanders_Shelter.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/50/Torres-strait-islanders_Shelter.jpg/500px-Torres-strait-islanders_Shelter.jpg 1.5x\" width=\"250\" height=\"165\" data-file-width=\"689\" data-file-height=\"455\"></a>\r\n<figcaption>Ethnoarchitectural forms constructed by the Torres Strait Islanders on the exposed beaches and cays at Mt Ernest Island (Naghi or Nagheer). Hand-coloured lithograph by Melville, c. 1849</figcaption>\r\n</figure>\r\n<figure class=\"mw-default-size mw-halign-left\"><a class=\"mw-file-description\" href=\"https://en.wikipedia.org/wiki/File:Duppa-at-erub-for-web.jpg\"><img class=\"mw-file-element\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Duppa-at-erub-for-web.jpg/250px-Duppa-at-erub-for-web.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/56/Duppa-at-erub-for-web.jpg/330px-Duppa-at-erub-for-web.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/5/56/Duppa-at-erub-for-web.jpg 2x\" width=\"190\" height=\"284\" data-file-width=\"374\" data-file-height=\"559\"></a>\r\n<figcaption>Example of&nbsp;<a class=\"mw-redirect\" title=\"Mer Island\" href=\"https://en.wikipedia.org/wiki/Mer_Island\">Mer Island</a>&nbsp;(or Murray Island) architecture (<a title=\"Torres Strait Islands\" href=\"https://en.wikipedia.org/wiki/Torres_Strait_Islands\">Torres Strait Islands</a>). Round form covered with dried banana leaves with sleeping platforms placed inside. Hand-coloured lithograph by Melville, c. 1849</figcaption>\r\n</figure>\r\n<p>The types of forms varied from dome frameworks made of cane through&nbsp;<a title=\"Triodia (plant)\" href=\"https://en.wikipedia.org/wiki/Triodia_(plant)\">spinifex</a>-clad arc-shaped structures, to tripod and triangular shelters and elongated, egg-shaped, stone-based structures with a timber frame to pole and platform constructions. Annual base camp structures, whether dome houses in the&nbsp;<a class=\"mw-redirect\" title=\"Rainforests\" href=\"https://en.wikipedia.org/wiki/Rainforests\">rainforests</a>&nbsp;of&nbsp;<a title=\"Queensland\" href=\"https://en.wikipedia.org/wiki/Queensland\">Queensland</a>&nbsp;and&nbsp;<a title=\"Tasmania\" href=\"https://en.wikipedia.org/wiki/Tasmania\">Tasmania</a>&nbsp;or stone-based houses in south-eastern Australia, were often designed for use over many years by the same family groups. Different language groups had differing names for structures. These included&nbsp;<a title=\"Humpy\" href=\"https://en.wikipedia.org/wiki/Humpy\">humpy</a>,&nbsp;<a class=\"mw-redirect\" title=\"Gunyah\" href=\"https://en.wikipedia.org/wiki/Gunyah\">gunyah</a>&nbsp;(or gunya), goondie,&nbsp;<a title=\"Wiltja\" href=\"https://en.wikipedia.org/wiki/Wiltja\">wiltja</a>&nbsp;and wurley (or wurlie).</p>\r\n<p>Until the 20th century, many non-Indigenous people assumed that Indigenous Australian peoples lacked permanent buildings, likely because Europeans misinterpreted Indigenous lifeways ways during early contact.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (July 2017)\">citation needed</span></a></em>]</sup>&nbsp;Labelling Indigenous Australian communities as \'<a class=\"mw-redirect\" title=\"Nomadic\" href=\"https://en.wikipedia.org/wiki/Nomadic\">nomadic</a>\' allowed early settlers to justify the takeover of Traditional Lands claiming that they were not inhabited by permanent residents.<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (July 2017)\">citation needed</span></a></em>]</sup></p>\r\n<p>Stone engineering was utilised by a number of Indigenous language groups.<sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-2\"><span class=\"cite-bracket\">[</span>2<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Examples of Indigenous Australian stone structures come from Western Victoria\'s&nbsp;<a title=\"Gunditjmara\" href=\"https://en.wikipedia.org/wiki/Gunditjmara\">Gunditjmara</a>&nbsp;peoples.<sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-3\"><span class=\"cite-bracket\">[</span>3<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-5\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-5\"><span class=\"cite-bracket\">[</span>5<span class=\"cite-bracket\">]</span></a></sup>&nbsp;These builders utilised basalt rocks around&nbsp;<a title=\"Lake Condah\" href=\"https://en.wikipedia.org/wiki/Lake_Condah\">Lake Condah</a>&nbsp;to erect housing and complicated systems of stone weirs, fish, and&nbsp;<a title=\"Eel\" href=\"https://en.wikipedia.org/wiki/Eel\">eel</a>&nbsp;traps, and gates in water-course creeks. The lava-stone homes had circular stone walls over a metre high and topped with a dome roof made of earth or sod cladding. Evidence of sophisticated stone engineering has been found in other parts of Australia. As late as 1894, a group of around 500 people still lived in houses near&nbsp;<a class=\"new\" title=\"Bessibelle (page does not exist)\" href=\"https://en.wikipedia.org/w/index.php?title=Bessibelle&amp;action=edit&amp;redlink=1\">Bessibelle</a>&nbsp;that were constructed out of stone with sod cladding on a timber-framed dome. Nineteenth-century observers also reported flat slab slate-type stone housing in South Australia\'s northeast corner. These dome-shaped homes were built on heavy limbs and used clay to fill in the gaps. In New South Wales&rsquo;&nbsp;<a title=\"Warringah Council\" href=\"https://en.wikipedia.org/wiki/Warringah_Council\">Warringah</a>&nbsp;area, stone shelters were constructed in an elongated egg shape and packed with clay to keep the interior dry.</p>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Australian_Indigenous_housing_design\">Australian Indigenous housing design</h3>\r\n</div>\r\n<p>Housing for Indigenous people living in many parts of Australia has been characterised by an acute shortage of&nbsp;<a class=\"mw-redirect\" title=\"Dwellings\" href=\"https://en.wikipedia.org/wiki/Dwellings\">dwellings</a>, poor quality&nbsp;<a title=\"Construction\" href=\"https://en.wikipedia.org/wiki/Construction\">construction</a>, and housing stock ill-suited to Indigenous lifestyles and preferences. Rapid&nbsp;<a title=\"Population growth\" href=\"https://en.wikipedia.org/wiki/Population_growth\">population growth</a>, shorter lifetimes for housing stock, and rising&nbsp;<a title=\"Construction\" href=\"https://en.wikipedia.org/wiki/Construction\">construction</a>&nbsp;costs have meant that efforts to limit overcrowding and provide healthy living environments for Indigenous people have been difficult for governments to achieve. Indigenous housing design and research is a specialised field within housing studies. There have been two main approaches to the design of Indigenous housing in Australia &ndash; Health and Culture.<sup id=\"cite_ref-6\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-7\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-7\"><span class=\"cite-bracket\">[</span>7<span class=\"cite-bracket\">]</span></a></sup></p>\r\n<p>The cultural design model attempts to incorporate understandings of differences in Indigenous Australian&nbsp;<a class=\"mw-redirect\" title=\"Cultural\" href=\"https://en.wikipedia.org/wiki/Cultural\">cultural</a>&nbsp;norms into housing design. There is a large body of knowledge on Indigenous housing in Australia that promotes the provision and design of housing that supports Indigenous residents&rsquo; socio-spatial needs, domiciliary behaviours, cultural values and aspirations. The culturally specific needs for Indigenous housing have been identified as major factors in the success of housing and failing to recognise the varying and diverse cultural housing needs of Indigenous peoples have been cited as the reasons for Indigenous Australian housing failures by Western academics for decades. Western-style housing imposes conditions on Indigenous residents that may hinder the practice of cultural norms. If adjusting to living in a particular house strains relationships, then severe stress on the occupants may result. Ross noted, \"Inappropriate housing and town planning have the capacity to disrupt the social organisation, the mechanisms for maintaining smooth social relations, and support networks.\"<sup id=\"cite_ref-8\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-8\"><span class=\"cite-bracket\">[</span>8<span class=\"cite-bracket\">]</span></a></sup>&nbsp;A range of cultural factors are discussed in the literature. These include designing housing to accommodate aspects of customer behaviour such as&nbsp;<a title=\"Australian Aboriginal avoidance practices\" href=\"https://en.wikipedia.org/wiki/Australian_Aboriginal_avoidance_practices\">avoidance</a>&nbsp;behaviours, household group structures, sleeping and eating behaviours, cultural constructs of crowding and privacy, and responses to death. The literature indicates that each housing design should be approached independently to recognise the many Indigenous cultures with varying customs and practices that exist across Australia.</p>\r\n<p>The health approach to housing design developed as housing is an important factor affecting the health of Indigenous Australians. Substandard and poorly maintained housing along with non-functioning&nbsp;<a title=\"Infrastructure\" href=\"https://en.wikipedia.org/wiki/Infrastructure\">infrastructure</a>&nbsp;can create serious health risks.<sup id=\"cite_ref-9\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-9\"><span class=\"cite-bracket\">[</span>9<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-10\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-10\"><span class=\"cite-bracket\">[</span>10<span class=\"cite-bracket\">]</span></a></sup>&nbsp;The \'Housing for Health\' approach developed from observations of the housing factors affecting Indigenous Australian peoples\' health into a methodology for measuring, rating, and fixing \'household hardware\' deemed essential for health. The approach is based on nine \'healthy housing principles\' which are the:</p>\r\n<ol>\r\n<li>ability to wash people (especially children),</li>\r\n<li>ability to wash clothes and bedding,</li>\r\n<li>removing waste,</li>\r\n<li>improving nutrition and food safety,</li>\r\n<li>reducing impact of crowding,</li>\r\n<li>reducing impact of pests or vermin</li>\r\n<li>controlling dust,</li>\r\n<li>temperature control, and</li>\r\n<li>reducing injury.<sup id=\"cite_ref-11\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Indigenous_architecture#cite_note-11\"><span class=\"cite-bracket\">[</span>11<span class=\"cite-bracket\">]</span></a></sup></li>\r\n</ol>\r\n<div class=\"mw-heading mw-heading3\">\r\n<h3 id=\"Contemporary_Indigenous_architecture_in_Australia\">Contemporary Indigenous architecture in Australia</h3>\r\n</div>\r\n<p>Defining what is \'Indigenous architecture\' in the contemporary context is a debate in some spheres.<sup class=\"noprint Inline-Template\">[<em><a title=\"Wikipedia:No original research\" href=\"https://en.wikipedia.org/wiki/Wikipedia:No_original_research\"><span title=\"The material near this tag possibly contains original research. (March 2017)\">original research?</span></a></em>]</sup>&nbsp;Many researchers and practitioners generally agree that Indigenous architectural projects are those which are designed with Indigenous clients or projects that imbue indigeneity through consultation, and advance Indigenous Australian agency. This latter category may include projects which are designed primarily for non-Indigenous users. Notwithstanding the definition, a range of projects have been designed for, by or with Indigenous users. The application of evidence-based research and consultation has led to museums, courts, cultural centres, keeping houses, prisons, schools, and a range of other institutional and residential buildings being designed to meet the varying and differing needs and aspirations of Indigenous users.<sup class=\"noprint Inline-Template\">[<em><a title=\"Wikipedia:Manual of Style/Words to watch\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Manual_of_Style/Words_to_watch#Puffery\"><span title=\"Unverified descriptions (March 2017)\">peacock&nbsp;prose</span></a></em>]</sup></p>', 'United Kingdom', '2025-09-25', '2025-10-25', '1', '2025-09-25 01:30:14', '2025-09-25 01:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `display` varchar(255) DEFAULT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `user_id`, `display`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'donation-policy', '1. How can I make a donation?', 'You can make donations online through our secure platform or offline via bank transfer or cheque. Simply follow the “Donate Now” button and complete the form with your details.', '1', '2025-09-23 02:32:25', '2025-09-23 02:33:35'),
(2, '1', 'donation-policy', 'Is my donation tax-deductible?', 'Yes, donations made to our organization qualify for tax exemption under applicable laws. You will receive a receipt for tax purposes.', '1', '2025-09-23 04:03:28', '2025-09-23 04:03:28'),
(3, '1', 'donation-policy', 'Can I donate anonymously?', 'Absolutely! You can choose to donate anonymously during the donation process. Your personal details will not be displayed publicly', '1', '2025-09-23 04:04:03', '2025-09-23 04:04:03'),
(4, '1', 'donation-policy', '. How will my donation be used?', 'All donations go directly towards our charitable programs, including medical treatments, educational support, and aid for differently-abled individuals.', '1', '2025-09-23 04:04:21', '2025-09-23 04:04:21'),
(5, '1', 'donation-policy', 'Can I set up recurring donations?', 'Yes, you can opt for a monthly or yearly recurring donation to support our programs consistently.', '1', '2025-09-23 04:04:33', '2025-09-23 04:04:33'),
(6, '1', 'donation-policy', 'What payment methods are accepted?', 'We accept online payments via credit/debit cards, UPI, net banking, and other secure payment gateways. Offline donations can be made via cheque or bank transfer.', '1', '2025-09-23 04:04:49', '2025-09-23 04:04:49'),
(7, '1', 'tex-exemption', 'What is the Family Pension Deduction for FY 2024-25?', 'Family pensions deductions has been increased in the Budget 2024 to ₹25,000 from ₹ 15,000 for the AY 2025-26 (FY 2024-25).', '1', '2025-09-23 22:59:21', '2025-09-23 22:59:21'),
(8, '1', 'tex-exemption', 'What Are New Income Tax Slabs & Tax Rates Under Revised New Tax Regime?', 'The tax slabs have been revised under the new tax regime. The new Income tax slabs under the new tax regime for FY 2025-26 (AY 2026-27) are:', '1', '2025-09-23 22:59:37', '2025-09-23 22:59:37'),
(9, '1', 'tex-exemption', 'What Is Surcharge Amount Under Revised New Tax Regime? Is That Change Applicable Only For Those With An Income More Than 5 Crores?', 'Under the revised new tax regime, the surcharge rate has been reduced from 37% to 25%  for taxpayers earning income more than Rs 5 crores. Therefore, this surcharge change applies only to those who opt for the new tax regime and have an income of more than Rs 5 crores.', '1', '2025-09-23 23:02:01', '2025-09-23 23:02:01'),
(10, '1', 'tex-exemption', 'What Deductions Are Available Under The Revised New Tax Regime?', 'A Standard deduction for salaried individuals up to Rs 75,000 (For FY 24-25 onwards)', '1', '2025-09-23 23:02:27', '2025-09-23 23:02:27'),
(11, '1', 'tex-exemption', 'Will I Receive An Exemption On Leave Encashment Under New Tax Regime?', 'n Budget 2023, the exemption threshold for leave encashment was increased 8-fold from ₹3 lakhs to ₹25 lakhs for non-government employees.', '1', '2025-09-23 23:02:44', '2025-09-23 23:02:44'),
(12, '1', 'causes', 'What is a charity?', 'A charity is a group of people who work together to help support others. That could mean helping people who are ill, don’t have enough food or clean water, or need help getting an education as well as other things. Charities try to make the world a kinder and better place for everyone.', '1', '2025-09-30 04:54:34', '2025-09-30 04:54:34'),
(13, '1', 'causes', 'Why do people need help?', 'Sometimes life is hard for people, and its not their fault. They might be born in a country where it’s hard to get medicine, or their family may not have enough money for important things like food or school. Charities step in to help people when they’re struggling.', '1', '2025-09-30 04:54:50', '2025-09-30 04:54:50'),
(14, '1', 'causes', 'Can I help too?', 'Yes! You don’t have to be a grown-up or have lots of money to make a difference. Children can help by fundraising, telling others about a charity, donating toys or clothes they no longer use, or even just spreading kindness. Every little bit counts.', '1', '2025-09-30 04:55:32', '2025-09-30 04:55:32'),
(15, '1', 'causes', 'How do I know if a charity is good or trustworthy?', 'A good charity is transparent about how they use money and who they help. You can look on their website to see updates and real stories. Humanity Direct for example shows you exactly how your donation is used and shares photos and updates from the children they help.', '1', '2025-09-30 04:55:48', '2025-09-30 04:55:48'),
(16, '1', 'causes', 'Where does the money go when we donate?', 'The money goes towards helping the people the charity supports. At Humanity Direct, for example, every penny goes directly towards a child’s medical care. Donors can even choose which child they want to help or donate directly to the Universal Fund. Our Universal Fund covers the cost of emergency operations and tops up patients who’ve almost reached their fundraising goal.', '1', '2025-09-30 04:57:43', '2025-09-30 04:57:43'),
(17, '1', 'donate', 'What is the NGO’s Mission and Focus Area?', 'Understanding what the NGO stands for is essential. The mission defines the purpose behind the work, the communities being served, and the long-term vision of the organisation. When donors align their values with an NGO’s mission, it leads to more fulfilling and impactful giving.', '1', '2025-09-30 23:41:17', '2025-09-30 23:41:17'),
(18, '1', 'donate', 'Is the Organisation Transparent About Fund Utilisation?', 'Transparency is the foundation of trust. When donors make a donation for NGO initiatives, they deserve to know how their money is being used. This includes clarity on fund allocation, administrative expenses, and the reach of programmes supported.', '1', '2025-09-30 23:41:33', '2025-09-30 23:41:33'),
(19, '1', 'donate', 'What Kind of Impact Has the NGO Made?', 'Impact is the true measure of an NGO’s effectiveness. It is not just about how many people were reached, but about the depth of change created in their lives.', '1', '2025-09-30 23:41:56', '2025-09-30 23:41:56'),
(20, '1', 'donate', 'Are Donations Tax-Deductible and Legally Compliant?', 'Responsible giving includes ensuring that your donations are going to verified, registered NGOs. One way to check this is by confirming whether the organisation is certified under Section 80G of the Income Tax Act', '1', '2025-09-30 23:42:13', '2025-09-30 23:42:13'),
(21, '1', 'donate', 'Does the NGO Offer Opportunities for Continued Involvement?', 'For many donors, giving is not a one-time event; it is a journey. While financial support is valuable, donors often want to stay informed, see the long-term progress of their supported initiatives, and participate in ongoing efforts.', '1', '2025-09-30 23:42:28', '2025-09-30 23:42:28'),
(22, '1', 'donate', 'Why is Online Donation the Smart Choice?', 'The rise of technology has revolutionised charitable giving. Online donation platforms make it easy for individuals to contribute from anywhere, at any time. They also make recurring giving simple, offer real-time tracking, and reduce administrative costs, ensuring more funds go directly to the cause.', '1', '2025-09-30 23:42:44', '2025-09-30 23:42:44'),
(23, '1', 'donate', 'How can I ensure that my donation to an NGO is being used effectively?', 'Look for transparent NGOs that share regular impact reports, financial disclosures, and project updates.', '1', '2025-09-30 23:43:24', '2025-09-30 23:43:24'),
(24, '1', 'donate', 'Is it safe to make an online donation to an NGO in India?', 'Yes, it is safe when using verified NGO websites or secure digital platforms with proper certifications.', '1', '2025-09-30 23:43:39', '2025-09-30 23:43:39'),
(25, '1', 'donate', 'Does Bal Raksha Bharat offer tax exemption certificates for donations?', 'Yes, all eligible donations to Bal Raksha Bharat are 80G certified under the Income Tax Act.', '1', '2025-09-30 23:43:51', '2025-09-30 23:43:51'),
(26, '1', 'donate', 'What kind of programmes does Bal Raksha Bharat focus on?', 'Bal Raksha Bharat works across child protection, education, healthcare, and emergency relief to ensure holistic child development.', '1', '2025-09-30 23:44:05', '2025-09-30 23:44:05'),
(27, '1', 'certificates', 'What is a Donation Certificate?', 'A Donation Certificate is an official acknowledgement issued by our organization to donors,\r\n                        recognizing their contribution towards our cause. It can be viewed online, downloaded, or\r\n                        printed for your records.', '1', '2025-10-01 23:35:45', '2025-10-01 23:35:45'),
(28, '1', 'certificates', 'How can I download my certificate?', 'You can download your certificate directly from the Certificates section by clicking the\r\n                       View Certificate  button and using the PDF download option.', '1', '2025-10-01 23:36:12', '2025-10-01 23:36:12'),
(29, '1', 'certificates', 'Is my donation tax-deductible?', 'Yes, most donations are eligible for tax deductions. Please check your local tax laws and\r\n                        use the Donation Certificate along with the official receipt as proof.', '1', '2025-10-01 23:36:34', '2025-10-01 23:36:34'),
(30, '1', 'certificates', 'Can I verify the authenticity of a certificate?', 'Yes, each certificate contains a unique Certificate ID and QR code that you can scan or\r\n                        enter on our website to verify its authenticity.', '1', '2025-10-01 23:36:53', '2025-10-01 23:36:53'),
(31, '1', 'certificates', 'Can I request a re-issue of my certificate?', 'Yes, if you lose or misplace your certificate, you can request a re-issue by contacting our\r\n                        support team with your donation details.', '1', '2025-10-01 23:37:12', '2025-10-01 23:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `category_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`category_id`)),
  `title` varchar(255) DEFAULT NULL,
  `upload_type` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `category_id`, `title`, `upload_type`, `path`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', '[\"3\",\"4\",\"5\"]', 'Old sport', 'image', 'uploads/images/RM1JwdSsU86GUqYuMaDeFdxuJihSpfO7RFJyRIy2.jpg', 'ethrth', '1', '2025-09-27 01:45:37', '2025-09-27 04:59:27'),
(6, '1', '[\"3\",\"4\",\"6\"]', 'HealthCare', 'video', 'uploads/videos/TNCjer8e85souJoqqePUrkalzXiYa5uKAhCS5R8Q.mp4', 'xzfb', '1', '2025-09-27 01:48:26', '2025-09-27 04:59:12'),
(7, '1', '[\"6\"]', 'Academy North2.3', 'image', 'uploads/images/DY1qJvdIcaHebDYlqSw3EkLpAH3QQyQKogY7hsPc.jpg', 'saddf', '1', '2025-09-27 01:53:30', '2025-09-27 04:59:00'),
(8, '1', '[\"3\",\"4\",\"5\",\"6\"]', 'Rockstar north', 'url', 'https://youtu.be/HeJZF23l4Ic?si=_K0FZQchUm2JlPdW', 'thestomonials', '1', '2025-09-27 04:49:49', '2025-09-27 04:49:49'),
(9, '1', '[\"3\",\"5\",\"6\"]', 'West Rockstar', 'image', 'uploads/images/dkIdtjk1gBvzrVcJIGpiHpAinLzBa5nkjHcCKKbK.jpg', 'dvb', '1', '2025-09-27 05:12:06', '2025-09-27 05:12:06'),
(10, '1', '[\"5\",\"6\"]', 'Rexsteps', 'image', 'uploads/images/MABGqIbhM1TkoBQzPhbe82L7O6uPXFgfIOqkSCsX.png', 'foreach ($users as $user)\r\n    @if ($user->type == 1)\r\n        @continue\r\n    @endif\r\n \r\n    <li>{{ $user->name }}</li>\r\n \r\n    @if ($user->number == 5)\r\n        @break\r\n    @endif\r\n@endforeach\r\n\r\nYou may also include the continuation or break condition within the directive declaration:\r\n\r\n@foreach ($users as $user)\r\n    @continue($user->type == 1)\r\n \r\n    <li>{{ $user->name }}</li>\r\n \r\n    @break($user->number == 5)\r\n@endforeach\r\n\r\nThe Loop Variable\r\nWhile iterating through a foreach loop, a $loop variable will be available inside of your loop. This variable provides access to some useful bits of information such as the current loop index and whether this is the first or last iteration through the loop:\r\n\r\n@foreach ($users as $user)\r\n    @if ($loop->first)\r\n        This is the first iteration.\r\n    @endif\r\n \r\n    @if ($loop->last)\r\n        This is the last iteration.\r\n    @endif\r\n \r\n    <p>This is user {{ $user->id }}</p>\r\n@endforeach\r\n\r\nIf you are in a nested loop, you may access the parent loop\'s $loop variable via the parent property:\r\n\r\n@foreach ($users as $user)\r\n    @foreach ($user->posts as $post)\r\n        @if ($loop->parent->first)\r\n            This is the first iteration of the parent loop.\r\n        @endif\r\n    @endforeach\r\n@endforeach\r\n\r\nThe $loop variable also contains a variety of other useful properties:\r\n\r\nProperty	Description\r\n$loop->index	The index of the current loop iteration (starts at 0).\r\n$loop->iteration	The current loop iteration (starts at 1).\r\n$loop->remaining	The iterations remaining in the loop.\r\n$loop->count	The total number of items in the array being iterated.\r\n$loop->first	Whether this is the first iteration through the loop.\r\n$loop->last	Whether this is the last iteration through the loop.\r\n$loop->even	Whether this is an even iteration through the loop.\r\n$loop->odd	Whether this is an odd iteration through the loop.\r\n$loop->depth	The nesting level of the current loop.\r\n$loop->parent	When in a nested loop, the parent\'s loop variable.\r\nConditional Classes & Styles\r\nThe @class directive conditionally compiles a CSS class string. The directive accepts an array of classes where the array key contains the class or classes you wish to add, while the value is a boolean expression. If the array element has a numeric key, it will always be included in the rendered class list:\r\n\r\n@php\r\n    $isActive = false;\r\n    $hasError = true;\r\n@endphp\r\n \r\n<span @class([\r\n    \'p-4\',\r\n    \'font-bold\' => $isActive,\r\n    \'text-gray-500\' => ! $is', '1', '2025-09-27 05:12:44', '2025-09-29 23:36:11'),
(11, '1', '[\"6\"]', 'Wesqaa', 'image', 'uploads/images/HjHJFIgJkXWMj1gGtcdoPmAgZZcGRz51vo5nSvaL.jpg', 'vhb', '1', '2025-09-27 07:05:24', '2025-09-27 07:05:24'),
(12, '1', '[\"6\"]', 'vined', 'image', 'uploads/images/XHAbTfXLvytgP06o9Xjl8kLBwASloR39K9jYaCxb.png', 'sddg', '1', '2025-09-27 07:05:52', '2025-09-27 07:05:52'),
(13, '1', '[\"5\",\"6\"]', 'sht', 'image', 'uploads/images/sZF7GIP0eUchpNa6msAIVuENRhggViKwGbBfeEfT.jpg', 'zvnb', '1', '2025-09-27 07:06:15', '2025-09-27 07:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `category_name`, `category_slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Health & Wellness', 'health-wellness', '1', '1', '2025-09-25 06:32:42', '2025-09-27 00:18:08'),
(4, 'Fun', 'fun', '1', '1', '2025-09-26 22:38:04', '2025-09-26 22:38:04'),
(5, 'Technology', 'technology', '1', '1', '2025-09-27 00:17:58', '2025-09-27 00:17:58'),
(6, 'Academic', 'academic', '1', '1', '2025-09-27 00:18:04', '2025-09-27 00:18:04'),
(7, 'Home Services', 'home-services', '1', '1', '2025-09-27 05:27:47', '2025-09-27 05:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `home_hero_sections`
--

CREATE TABLE `home_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `btn_label_1` varchar(255) NOT NULL,
  `btn_link_1` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_hero_sections`
--

INSERT INTO `home_hero_sections` (`id`, `tag_line`, `heading`, `description`, `image`, `btn_label_1`, `btn_link_1`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Serving Humanity, Everywhere We Go.', 'We are nonprofit team and work worldwide', 'Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason Their multiply doesn\'t behold shall appear living heaven second roo lights. Itself hath thing for won\'t herb forth gathered good bear fowl kind give fly form winged for reason', 'home_hero_sections/B130KpiehRhSC8bRmtgtidvGlV3KQl4cTCNV5KSw.png', 'Show more', 'http://127.0.0.1:8000/contact-us', '1', '2025-07-18 05:40:55', '2025-09-02 19:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `disc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `user_id`, `heading`, `title`, `disc`, `created_at`, `updated_at`) VALUES
(1, '1', 'Services and Portfolio', 'Our Services and  Works', 'Experience the transformation as we elevate your brand’s\r\nonline presence, making it unforgettable.', '2025-07-22 23:33:27', '2025-07-22 23:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_05_12_163633_create_configurations_table', 2),
(7, '2025_05_13_021355_create_testimonials_table', 3),
(8, '2025_05_13_160254_create_blogs_table', 4),
(9, '2025_05_14_015955_create_contacts_table', 5),
(10, '2025_07_18_104644_create_home_hero_sections_table', 6),
(11, '2025_07_21_052340_create_our_values_sections_table', 7),
(12, '2025_07_21_052352_create_our_values_table', 7),
(13, '2025_07_21_112321_create_smart_solutions_table', 8),
(14, '2025_07_21_112337_create_solutions_table', 8),
(15, '2025_07_22_054916_create_why_choose_us_table', 9),
(16, '2025_07_22_054935_create_why_choose_us_list_table', 9),
(17, '2025_07_22_060830_create_about_technologies_table', 10),
(18, '2025_07_22_075831_create_about_us_mission_vission_table', 11),
(19, '2025_07_22_075901_create_about_us_counter__table', 11),
(20, '2025_07_22_112941_create_success_table', 12),
(21, '2025_07_22_130041_create_about_our_values_table', 13),
(22, '2025_07_23_042406_create_home_services_table', 14),
(23, '2025_07_23_054219_create_client_stories_section_table', 15),
(24, '2025_07_23_054226_create_client_stories_table', 15),
(25, '2025_07_23_080204_create_solutions_btn_setting_table', 16),
(26, '2025_07_23_101414_create_our_progress_table', 17),
(27, '2025_07_23_101428_create_our_progress_section_table', 17),
(29, '2025_07_24_050548_create_team_members_table', 19),
(30, '2025_07_24_050727_create_team_members_section_table', 19),
(31, '2025_07_24_050019_create_about_inquiry_table', 20),
(32, '2025_07_24_103250_create_award_testimonials_table', 21),
(33, '2025_07_24_111207_create_testimonials_poster_table', 21),
(34, '2025_07_26_072006_create_blog_categories_table', 22),
(35, '2025_07_29_064944_create_c_d_home_hero_table', 23),
(36, '2025_07_29_072246_create_c_d_home_hero_expertise_table', 24),
(37, '2025_07_29_075846_create_c_d_home_hero_services_table', 25),
(38, '2025_07_29_092511_create_c_d_home_hero_process_table', 26),
(39, '2025_07_29_102737_create_aiml_home_hero_table', 27),
(40, '2025_07_29_103519_create_aiml_home_hero_about_table', 28),
(41, '2025_07_29_103528_create_aiml_home_hero_services_table', 28),
(42, '2025_07_29_112030_create_aiml_home_hero_process_table', 29),
(43, '2025_07_29_115944_create_case_study_categories_table', 30),
(44, '2025_07_29_120108_create_projects_table', 30),
(45, '2025_07_30_060538_create_case_study_technologies_table', 31),
(46, '2025_07_30_080600_create_c_d_inquiry_table', 32),
(47, '2025_07_30_080614_create_dynamic_inquiry_table', 32),
(49, '2025_07_30_100224_create_aiml_home_gallery_tag_table', 34),
(50, '2025_07_30_104354_change_headers_to_text_in_aiml_home_gallery_table', 35),
(51, '2025_07_30_104517_change_headers_to_text_in_aiml_home_gallery_table', 36),
(52, '2025_07_30_114549_create_aiml_home_gallery_table', 37),
(53, '2025_07_31_030125_create_terms_table', 38),
(54, '2025_09_23_053541_create_about_pages_table', 39),
(55, '2025_09_23_075121_create_faqs_table', 40),
(56, '2025_09_25_061423_create_events_table', 41),
(57, '2025_09_25_112448_create_galleries_table', 42),
(58, '2025_09_25_112517_create_gallery_categories_table', 42),
(61, '2025_09_30_064554_create_donates_table', 43),
(62, '2025_10_02_042616_create_certificates_table', 44);

-- --------------------------------------------------------

--
-- Table structure for table `our_progress`
--

CREATE TABLE `our_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_progress`
--

INSERT INTO `our_progress` (`id`, `user_id`, `heading`, `description`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Our Process', 'The procedure that moves a project ahead determines its success. Quality, consistent results, and business success follow a consistent process', 'Let\'s Talk', 'http://127.0.0.1:8000/admin/our-progress-section', '2025-07-23 05:17:49', '2025-07-23 07:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `our_progress_section`
--

CREATE TABLE `our_progress_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_progress_section`
--

INSERT INTO `our_progress_section` (`id`, `user_id`, `image`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'progress-section/zhckC3rNXhEpcypUjdXdmEIkvKNgEVkXPRwavo3F.png', 'On boarding', 'Get to Know Your Team\r\n\r\nWhen you deal with Vibrant Solution Technology, you have the support of our complete team behind you. The process begins with a kick-off meeting, which can be held in person or remotely via Zoom or Google Meet.', '1', '2025-07-23 05:37:34', '2025-07-23 06:12:12'),
(3, '1', 'progress-section/6AOvEEqqZUacopNWq2KlBT7aGmTuulgM3ikJ7p1L.png', 'Design & Development', 'Once your content is complete, your project will go to the design stage, where you will construct the general \"look\" of your new website. Our developers will next prepare the functionality and features of your website.', '1', '2025-07-23 05:44:24', '2025-07-23 06:12:49'),
(4, '1', 'progress-section/fNYWdgTp5XFxHAxALaCMZvwVdNX8Kz7Fe2949Epq.png', 'Launch', 'Go-Live & Project Wrap\r\n\r\nThe most thrilling portion is still to come! Your new website or mobile app is ready to be seen by the rest of the world.', '1', '2025-07-23 05:44:49', '2025-07-23 05:44:49'),
(6, '1', 'progress-section/UqXHHzfdqlMSDxAF7LMApJ9g9NJFIPMXmePgLycc.png', 'Support      & Maintenance', 'Your new product/application is up and running, but your business is constantly evolving! The best changes occur as a result of growth. Our team is ready to make modifications as soon as you request them', '1', '2025-07-23 05:48:12', '2025-07-23 05:48:12'),
(7, '1', 'progress-section/sQKZij3XVB55HLiCIvW4LeCW8hfinNNMcQ1C6W4L.png', 'Planning', 'When you contact Vibrant Solution Technology, you will initially speak with our customer service representative or sales and marketing vice president. Our goal is to listen to you and learn enough about your company so that we can offer you the most satisfactory solution.', '1', '2025-07-23 06:07:01', '2025-07-23 06:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `our_values`
--

CREATE TABLE `our_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_values`
--

INSERT INTO `our_values` (`id`, `user_id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, '1', 'Give Donation', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/JRbQk2sdTk2pkVdcKNDKfPrFyLVzXOA3W6VhfGY2.jpg', '2025-07-21 02:01:08', '2025-09-30 04:24:13'),
(8, '1', 'Give Inspiration', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/XmZPl4Oi81mohKQj8oOTyFtu41qKcBxhtqyHuc2N.jpg', '2025-07-21 02:08:51', '2025-09-30 04:24:23'),
(9, '1', 'Become Volunteer', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'our-values/cua2Mu489J2f69eyzcWXrTZ2Fq3JwB0B2q9DSuw7.png', '2025-07-21 02:09:14', '2025-09-30 04:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `our_values_sections`
--

CREATE TABLE `our_values_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_values_sections`
--

INSERT INTO `our_values_sections` (`id`, `heading`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Major Causes', 'Creepeth called face upon face yielding midst is after moveth', '1', '2025-07-21 00:13:54', '2025-09-02 20:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `tech_id` text DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `is_display` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`is_display`)),
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `tech_id`, `heading`, `short_description`, `description`, `image`, `is_display`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, '1,2', 'Skincare magicTM', 'Create visual materials such as logos, branding materials, marketing collateral, and web graphics.', '<div class=\"sofax-portfolio-authore\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Client :</p>\r\n<h4>Henry Company</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Services :</p>\r\n<h4>Web Design</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Date :</p>\r\n<h4>March 27, 2024</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Website :</p>\r\n<h4>Preview Project<a href=\"../../case-study-detail\"><img src=\"../../assets/images/portfolio/Icon1.png\" alt=\"\"></a></h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content3\">\r\n<h3>Project Overview :</h3>\r\n<p>\"Gradient Web Design\" sounds like a project focused on incorporating gradients into web design. Gradients are a popular design element that involve a smooth transition between two or more colors. By creating a comprehensive project overview, you can ensure that the Gradient Web Design project progresses smoothly and achieves its objectives effectivel</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-wrap\">\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>1. Objective</h4>\r\n<p>The objective of this project is to leverage gradient design elements to enhance the visual appeal, user experience, and overall aesthetics of our website.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>2. Scope</h4>\r\n<p>Integrating gradient designs into various components of the website, including but not limited to backgrounds, buttons, text elements, headers, &amp; illustrations.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>3. Target Audience</h4>\r\n<p>Our target audience consists of define your target to audience demographics, interests, etc. The gradient designs will resonate with this audience.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>4. Research</h4>\r\n<p>Conduct research on current trends in web design, specifically focusing. Analyze competitor websites industry-leading examples to gather inspiration &amp; identify.</p>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content-bottom\">\r\n<h3>Positive User Feedback :</h3>\r\n<p>User feedback on the gradient designs has been overwhelmingly positive, with many users expressing that appreciation for the visually appealing &amp; dynamic nature of the website. Users have reported that gradient designs contribute to a more immersive &amp; enjoyable browsing experience, encouraging them to spend more time exploring the site.</p>\r\n</div>', 'projects/s2Hgw3cG3Zthp6LTlb3AJ1ZxOVV6C61UAf3fPYm3.png', '[\"home\"]', 'skincare-magictm', '1', '1', '2025-07-30 21:02:31', '2025-07-30 21:02:31'),
(2, 5, '1,2,3', 'island*', 'Create iSLAND visual materials such as logos, branding materials, marketing collateral, and web graphics.', '<div class=\"sofax-portfolio-authore\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Client :</p>\r\n<h4>Henry Company</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Services :</p>\r\n<h4>Web Design</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Date :</p>\r\n<h4>March 27, 2024</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-6\">\r\n<div class=\"portfolio-details-content2\">\r\n<p>Website :</p>\r\n<h4>Preview Project<a href=\"../../case-study-detail\"><img src=\"../../assets/images/portfolio/Icon1.png\" alt=\"\"></a></h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content3\">\r\n<h3>Project Overview :</h3>\r\n<p>\"Gradient Web Design\" sounds like a project focused on incorporating gradients into web design. Gradients are a popular design element that involve a smooth transition between two or more colors. By creating a comprehensive project overview, you can ensure that the Gradient Web Design project progresses smoothly and achieves its objectives effectivel</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-wrap\">\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>1. Objective</h4>\r\n<p>The objective of this project is to leverage gradient design elements to enhance the visual appeal, user experience, and overall aesthetics of our website.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>2. Scope</h4>\r\n<p>Integrating gradient designs into various components of the website, including but not limited to backgrounds, buttons, text elements, headers, &amp; illustrations.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>3. Target Audience</h4>\r\n<p>Our target audience consists of define your target to audience demographics, interests, etc. The gradient designs will resonate with this audience.</p>\r\n</div>\r\n<div class=\"sofax-portfolio-authore-text\">\r\n<h4>4. Research</h4>\r\n<p>Conduct research on current trends in web design, specifically focusing. Analyze competitor websites industry-leading examples to gather inspiration &amp; identify.</p>\r\n</div>\r\n</div>\r\n<div class=\"portfolio-details-content-bottom\">\r\n<h3>Positive User Feedback :</h3>\r\n<p>User feedback on the gradient designs has been overwhelmingly positive, with many users expressing that appreciation for the visually appealing &amp; dynamic nature of the website. Users have reported that gradient designs contribute to a more immersive &amp; enjoyable browsing experience, encouraging them to spend more time exploring the site.</p>\r\n</div>', 'projects/eQ4kFkuMdl9eKxVL0M3nroL1APF3vtZhlm4jGjT3.png', NULL, 'island', '1', '1', '2025-07-30 02:15:49', '2025-07-30 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `smart_solutions`
--

CREATE TABLE `smart_solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solution_heading` varchar(255) NOT NULL,
  `solution_description` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smart_solutions`
--

INSERT INTO `smart_solutions` (`id`, `solution_heading`, `solution_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Featured Causes', 'Creepeth called face upon face yielding midst is after moveth', '1', '2025-07-21 07:11:46', '2025-09-09 19:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `smart_title` varchar(255) NOT NULL,
  `smart_heading` varchar(255) NOT NULL,
  `smart_image` varchar(255) DEFAULT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `user_id`, `smart_title`, `smart_heading`, `smart_image`, `data`, `btn_label`, `btn_link`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', '250 Donor', 'Education for every child 1', 'solutions/ItXac7M3qrStDH93YeCy0Rrhho4Ljh5UKqbleMA3.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', 'http://127.0.0.1:8000/', '1', '2025-07-21 23:11:02', '2025-09-30 04:11:00'),
(6, '1', '100 Donor', 'Education for every child', 'solutions/muhwrOoBD56TzupBqZ5Q5TkLFT9JV99T5xSL5YlE.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', '#', '1', '2025-07-21 23:12:15', '2025-09-30 04:10:50'),
(8, '1', '100 Donor', 'Education for every child', 'solutions/yWQRuwQM3GKZQZvOJFnGEARetKOWZm70kqr0jBEa.jpg', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', '#', '1', '2025-09-02 21:26:03', '2025-09-30 04:11:08'),
(9, '1', '100 Donor', 'Making Pro for every Child', 'solutions/MlC6jUekUAtZdAz945h9yNRs1Itb038rqdXXm2G1.png', 'Be tree their face won\'t appear day waters moved fourth in they\'re divide don\'t a you were man face god.', 'Donate', 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/tables-basic.html', '1', '2025-09-30 04:00:59', '2025-09-30 04:00:59'),
(10, '1', '280 Donner', 'Development for every child', 'solutions/L7cArKnenpCMIKsbxnEQDO212073iMTMiJP2c724.png', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'Donate', '#', '1', '2025-09-30 04:21:08', '2025-09-30 04:21:08'),
(11, '1', '10 Donner', 'Donate Future For every children', 'solutions/oswoGEDcq8cmJzOiCsHJpscad5G6xm4UGmQJrttp.png', 'It you\'re. Was called you\'re fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.', 'Donate', '#', '1', '2025-09-30 04:22:02', '2025-09-30 04:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `poster_image` varchar(255) DEFAULT NULL,
  `success_title` varchar(255) NOT NULL,
  `success_heading` varchar(255) NOT NULL,
  `success_disc` text NOT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `user_id`, `background_image`, `poster_image`, `success_title`, `success_heading`, `success_disc`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'success_section/wk2V8WNYuHdrmzNAM1kLoX9iShkae4Z65URfjo7l.jpg', 'success_section/xSrAPmVyncHk1XqSjE0ulSoZHdreY9gzwu9Xzhai.png', 'Bring success with Vibrant Software Technologies !', 'Reach Out and Elevate Your Success Now !', 'Our Proven Work Process blends experience, precision, and innovation for consistently outstanding results.', 'Get Started with us', 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/tables-basic.html', '2025-07-22 06:18:47', '2025-07-22 07:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members_section`
--

CREATE TABLE `team_members_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `terms_slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_slug` varchar(255) DEFAULT NULL,
  `meta_content` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_og_title` varchar(255) DEFAULT NULL,
  `meta_og_description` text DEFAULT NULL,
  `meta_og_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `terms_slug`, `description`, `user_id`, `status`, `created_at`, `updated_at`, `meta_title`, `meta_slug`, `meta_content`, `meta_description`, `meta_keywords`, `meta_og_title`, `meta_og_description`, `meta_og_image`) VALUES
(1, 'Privacy', 'privacy', '<h1>Privacy Policy for KARMA BELIEF CHARITABLE TRUST</h1>\r\n<p>At KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from https://www.karmabelief.org, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by KARMA BELIEF CHARITABLE TRUST WEBSITE and how we use it.</p>\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in KARMA BELIEF CHARITABLE TRUST WEBSITE. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n<h2>Consent</h2>\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n<h2>Information we collect</h2>\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n<h2>How we use your information</h2>\r\n<p>We use the information we collect in various ways, including to:</p>\r\n<ul>\r\n<li>Provide, operate, and maintain our website</li>\r\n<li>Improve, personalize, and expand our website</li>\r\n<li>Understand and analyze how you use our website</li>\r\n<li>Develop new products, services, features, and functionality</li>\r\n<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n<li>Send you emails</li>\r\n<li>Find and prevent fraud</li>\r\n</ul>\r\n<h2>Log Files</h2>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>\r\n<h2>Cookies and Web Beacons</h2>\r\n<p>Like any other website, KARMA BELIEF CHARITABLE TRUST WEBSITE uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n<h2>Google DoubleClick DART Cookie</h2>\r\n<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL &ndash;&nbsp;<a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a></p>\r\n<h2>Our Advertising Partners</h2>\r\n<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>\r\n<ul>\r\n<li>\r\n<p>Google</p>\r\n<p><a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a></p>\r\n</li>\r\n</ul>\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of KARMA BELIEF CHARITABLE TRUST WEBSITE.</p>\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on KARMA BELIEF CHARITABLE TRUST WEBSITE, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n<p>Note that KARMA BELIEF CHARITABLE TRUST WEBSITE has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n<h2>Third Party Privacy Policies</h2>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites.</p>\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n<p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n<p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n<h2>GDPR Data Protection Rights</h2>\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n<h2>Children\'s Information</h2>\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n<p>KARMA BELIEF CHARITABLE TRUST WEBSITE does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>', '1', '1', '2025-09-09 21:39:14', '2025-09-09 20:49:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Disclaimer', 'disclaimer', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Disclaimer:</p>\r\n<ul>\r\n<li><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Disclaimer) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA).</li>\r\n<li><strong>Service</strong>&nbsp;refers to the Website.</li>\r\n<li><strong>You</strong>&nbsp;means the individual accessing the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>\r\n<li><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></li>\r\n</ul>\r\n<h1>Disclaimer</h1>\r\n<p>The information contained on the Service is for general information purposes only.</p>\r\n<p>The Company assumes no responsibility for errors or omissions in the contents of the Service.</p>\r\n<p>In no event shall the Company be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice. This Disclaimer has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/disclaimer-generator/\" target=\"_blank\" rel=\"noopener\">Disclaimer Generator</a>.</p>\r\n<p>The Company does not warrant that the Service is free of viruses or other harmful components.</p>\r\n<h1>External Links Disclaimer</h1>\r\n<p>The Service may contain links to external websites that are not provided or maintained by or in any way affiliated with the Company.</p>\r\n<p>Please note that the Company does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>\r\n<h1>Errors and Omissions Disclaimer</h1>\r\n<p>The information given by the Service is for general guidance on matters of interest only. Even if the Company takes every precaution to insure that the content of the Service is both current and accurate, errors can occur. Plus, given the changing nature of laws, rules and regulations, there may be delays, omissions or inaccuracies in the information contained on the Service.</p>\r\n<p>The Company is not responsible for any errors or omissions, or for the results obtained from the use of this information.</p>\r\n<h1>Fair Use Disclaimer</h1>\r\n<p>The Company may use copyrighted material which has not always been specifically authorized by the copyright owner. The Company is making such material available for criticism, comment, news reporting, teaching, scholarship, or research.</p>\r\n<p>The Company believes this constitutes a \"fair use\" of any such copyrighted material as provided for in section 107 of the United States Copyright law.</p>\r\n<p>If You wish to use copyrighted material from the Service for your own purposes that go beyond fair use, You must obtain permission from the copyright owner.</p>\r\n<h1>Views Expressed Disclaimer</h1>\r\n<p>The Service may contain views and opinions which are those of the authors and do not necessarily reflect the official policy or position of any other author, agency, organization, employer or company, including the Company.</p>\r\n<p>Comments published by users are their sole responsibility and the users will take full responsibility, liability and blame for any libel or litigation that results from something written in or as a direct result of something written in a comment. The Company is not liable for any comment published by users and reserves the right to delete any comment for any reason whatsoever.</p>\r\n<h1>No Responsibility Disclaimer</h1>\r\n<p>The information on the Service is provided with the understanding that the Company is not herein engaged in rendering legal, accounting, tax, or other professional advice and services. As such, it should not be used as a substitute for consultation with professional accounting, tax, legal or other competent advisers.</p>\r\n<p>In no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in connection with your access or use or inability to access or use the Service.</p>\r\n<h1>\"Use at Your Own Risk\" Disclaimer</h1>\r\n<p>All information in the Service is provided \"as is\", with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose.</p>\r\n<p>The Company will not be liable to You or anyone else for any decision made or action taken in reliance on the information given by the Service or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>\r\n<h1>Contact Us</h1>\r\n<p>If you have any questions about this Disclaimer, You can contact Us:</p>\r\n<ul>\r\n<li>By email: info@karmabelief.org</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:00:46', '2025-09-09 21:01:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Refund', 'refund', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<p>Thank you for shopping at KARMA BELIEF CHARITABLE TRUST WEBSITE.</p>\r\n<p>If, for any reason, You are not completely satisfied with a purchase We invite You to review our policy on refunds and returns. This Return and Refund Policy has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/return-refund-policy-generator/\" target=\"_blank\" rel=\"noopener\">Return and Refund Policy Generator</a>.</p>\r\n<p>The following terms are applicable for any products that You purchased with Us.</p>\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Return and Refund Policy:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS, VASTRAPUR, AHMEDABAD - 380054, GUJARAT, INDIA.</p>\r\n</li>\r\n<li>\r\n<p><strong>Goods</strong>&nbsp;refer to the items offered for sale on the Service.</p>\r\n</li>\r\n<li>\r\n<p><strong>Orders</strong>&nbsp;mean a request by You to purchase Goods from Us.</p>\r\n</li>\r\n<li>\r\n<p><strong>Service</strong>&nbsp;refers to the Website.</p>\r\n</li>\r\n<li>\r\n<p><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></p>\r\n</li>\r\n<li>\r\n<p><strong>You</strong>&nbsp;means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>\r\n</li>\r\n</ul>\r\n<h1>Your Order Cancellation Rights</h1>\r\n<p>You are entitled to cancel Your Order within 7 days without giving any reason for doing so.</p>\r\n<p>The deadline for cancelling an Order is 7 days from the date on which You received the Goods or on which a third party you have appointed, who is not the carrier, takes possession of the product delivered.</p>\r\n<p>In order to exercise Your right of cancellation, You must inform Us of your decision by means of a clear statement. You can inform us of your decision by:</p>\r\n<ul>\r\n<li>\r\n<p>By email: info@karmabelief.org</p>\r\n</li>\r\n<li>\r\n<p>By mail: B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)</p>\r\n</li>\r\n</ul>\r\n<p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as You used for the Order, and You will not incur any fees for such reimbursement.</p>\r\n<h1>Conditions for Returns</h1>\r\n<p>In order for the Goods to be eligible for a return, please make sure that:</p>\r\n<ul>\r\n<li>The Goods were purchased in the last 7 days</li>\r\n<li>The Goods are in the original packaging</li>\r\n</ul>\r\n<p>The following Goods cannot be returned:</p>\r\n<ul>\r\n<li>The supply of Goods made to Your specifications or clearly personalized.</li>\r\n<li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>\r\n<li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>\r\n<li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>\r\n</ul>\r\n<p>We reserve the right to refuse returns of any merchandise that does not meet the above return conditions in our sole discretion.</p>\r\n<p>Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This exclusion may not apply to You if it is not permitted by applicable law.</p>\r\n<h1>Returning Goods</h1>\r\n<p>You are responsible for the cost and risk of returning the Goods to Us. You should send the Goods at the following address:</p>\r\n<p>B/806 ASHIMA TOWER, NEAR<br>SANDESH PRESS,VASTRAPUR,<br>AHMEDABAD - 380054<br>GUJARAT (INDIA)</p>\r\n<p>We cannot be held responsible for Goods damaged or lost in return shipment. Therefore, We recommend an insured and trackable mail service. We are unable to issue a refund without actual receipt of the Goods or proof of received return delivery.</p>\r\n<h1>Gifts</h1>\r\n<p>If the Goods were marked as a gift when purchased and then shipped directly to you, You\'ll receive a gift credit for the value of your return. Once the returned product is received, a gift certificate will be mailed to You.</p>\r\n<p>If the Goods weren\'t marked as a gift when purchased, or the gift giver had the Order shipped to themselves to give it to You later, We will send the refund to the gift giver.</p>\r\n<h2>Contact Us</h2>\r\n<p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>\r\n<ul>\r\n<li>\r\n<p>By email: info@karmabelief.org</p>\r\n</li>\r\n<li>\r\n<p>By mail: B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA)</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:00:56', '2025-09-09 21:01:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cookies', 'cookies', '<div class=\"container-fluid bg-white py-3 py-md-4 py-lg-5\">\r\n<div class=\"container-lg\">\r\n<p>This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used. This Cookies Policy has been created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/cookies-policy-generator/\" target=\"_blank\" rel=\"noopener\">Cookies Policy Generator</a>.</p>\r\n<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>\r\n<p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.</p>\r\n<h1>Interpretation and Definitions</h1>\r\n<h2>Interpretation</h2>\r\n<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>\r\n<h2>Definitions</h2>\r\n<p>For the purposes of this Cookies Policy:</p>\r\n<ul>\r\n<li><strong>Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Cookies Policy) refers to KARMA BELIEF CHARITABLE TRUST, B/806 ASHIMA TOWER, NEAR SANDESH PRESS,VASTRAPUR, AHMEDABAD - 380054 GUJARAT (INDIA).</li>\r\n<li><strong>Cookies</strong>&nbsp;means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>\r\n<li><strong>Website</strong>&nbsp;refers to KARMA BELIEF CHARITABLE TRUST WEBSITE, accessible from&nbsp;<a href=\"https://www.karmabelief.org/\" target=\"_blank\" rel=\"external nofollow noopener\">https://www.karmabelief.org</a></li>\r\n<li><strong>You</strong>&nbsp;means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>\r\n</ul>\r\n<h1>The use of the Cookies</h1>\r\n<h2>Type of Cookies We Use</h2>\r\n<p>Cookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>\r\n<p>We use both session and persistent Cookies for the purposes set out below:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Necessary / Essential Cookies</strong></p>\r\n<p>Type: Session Cookies</p>\r\n<p>Administered by: Us</p>\r\n<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>\r\n</li>\r\n<li>\r\n<p><strong>Functionality Cookies</strong></p>\r\n<p>Type: Persistent Cookies</p>\r\n<p>Administered by: Us</p>\r\n<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>\r\n</li>\r\n</ul>\r\n<h2>Your Choices Regarding Cookies</h2>\r\n<p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>\r\n<p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>\r\n<p>If You\'d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>\r\n<ul>\r\n<li>\r\n<p>For the Chrome web browser, please visit this page from Google:&nbsp;<a href=\"https://support.google.com/accounts/answer/32050\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.google.com/accounts/answer/32050</a></p>\r\n</li>\r\n<li>\r\n<p>For the Internet Explorer web browser, please visit this page from Microsoft:&nbsp;<a href=\"http://support.microsoft.com/kb/278835\" target=\"_blank\" rel=\"external nofollow noopener\">http://support.microsoft.com/kb/278835</a></p>\r\n</li>\r\n<li>\r\n<p>For the Firefox web browser, please visit this page from Mozilla:&nbsp;<a href=\"https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>\r\n</li>\r\n<li>\r\n<p>For the Safari web browser, please visit this page from Apple:&nbsp;<a href=\"https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac\" target=\"_blank\" rel=\"external nofollow noopener\">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>\r\n</li>\r\n</ul>\r\n<p>For any other web browser, please visit your web browser\'s official web pages.</p>\r\n<h2>More Information about Cookies</h2>\r\n<p>You can learn more about cookies:&nbsp;<a href=\"https://www.privacypolicies.com/blog/cookies/\" target=\"_blank\" rel=\"noopener\">What Are Cookies?</a>.</p>\r\n<h2>Contact Us</h2>\r\n<p>If you have any questions about this Cookies Policy, You can contact us:</p>\r\n<ul>\r\n<li>By email: info@karmabelief.org</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"container-fluid py-lg-5 py-3 bg-warning px-0 bg-footer\">\r\n<div class=\"container-lg py-lg-5\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3\">\r\n<div class=\"col-12 col-md-12 col-lg-8\">\r\n<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3\">\r\n<div class=\"col\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '1', '1', '2025-09-09 21:01:02', '2025-09-09 21:02:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avtar` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `display_show` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`display_show`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avtar`, `position`, `company_name`, `description`, `user_id`, `status`, `display_show`, `created_at`, `updated_at`) VALUES
(2, 'Washim Jowader', 'testimonials/0XvwsTC8qMZDknqg0HFROek736S3ySjUyVMwRHnS.png', 'Software Developer', 'TechVibe Co', '“AgenShark not only impressed provided strategic guidance that helped us with their coding finesse but also brought an artistic touch to the functionality. Their team seamlessly translated our vision into a digital reality, providing not just a website but an interactive platform that reflects our tech-forward identity.”', '1', '1', NULL, '2025-05-12 21:15:39', '2025-07-25 23:38:00'),
(3, 'Nishan Khan', 'testimonials/Jjn0iJUohYPBAmhkZXNWNq9IeJmj5eQgavGEJ9r1.png', 'Founder', 'startup Innovations', '“As a startup, we needed a digital presence that would make a statement. AgenShark not only delivered a stunning website but also provided strategic guidance that helped us establish our brand identity. Their expertise and commitment to our project were instrumental in our initial success.”', '1', '1', NULL, '2025-07-25 23:35:58', '2025-07-25 23:35:58'),
(4, 'Prem', 'testimonials/tqc9aYdzQ4ALNelxQQE2k7rL6NYke99ZQPjQMlLP.png', 'Project Manager', 'FDI Solutions', 'zgdf hfds,gnhhdfl;kkpdfdjg rkgp[ogodfjgg roppkgkgpdfkgg;f dflkggpdkfgck polkggpdofofjg;sojtg[eri rarotjifpdjgpdfgyfghfdgdgf', '1', '1', NULL, '2025-07-26 00:51:26', '2025-07-26 00:54:57'),
(5, 'hghgc', 'testimonials/XKuDoOta7wa6rPxzRxM2ZT12hBCrjzb2FIP1IdGw.jpg', 'hfdjdf', 'kdkd', 'ddg', '1', '0', NULL, '2025-07-26 01:32:43', '2025-07-26 01:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_poster`
--

CREATE TABLE `testimonials_poster` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poster_title` varchar(255) DEFAULT NULL,
  `btn_label` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_poster`
--

INSERT INTO `testimonials_poster` (`id`, `poster_title`, `btn_label`, `btn_link`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Clutch', 'Go To TO Clutch', 'http://127.0.0.1:8000/case-study', '1', '2025-07-24 06:00:42', '2025-07-24 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile_image` text DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `last_name`, `phone`, `profile_image`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'Admin', NULL, '8888888885', 'web_image/81acafeeb8772b27767bad68460cf0f6.png', 'admin', NULL, '$2y$12$hsq0jmuSnd.ySWX0KPSCTOwvPs3K8VZzb/GgjCioTRp9BSwA3OF6K', 'PfPMnJAk1NtpNmkstsbaHgUJTzOAwCRlct45SnddvO2jCS9apCYm8cYrQ2Ag', '2025-05-12 10:01:31', '2025-08-30 11:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `user_id`, `image`, `image_2`, `title`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'why_choose_us/TebY8JJfcb4KsfvWRlLnmz0DgPTxNKmpZIjAisW5.png', 'why_choose_us/douXbAc2oyu0Vs6ln4512PMLmy2LjrV1JC2P8ZjG.png', 'Why Choose Us??', 'Our Tailored Strategies for Your Succes', 'Crafting precision in every detail, our tailored strategies pave the way for your unparalleled success in the digital landscape', '2025-07-22 01:09:12', '2025-07-22 03:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_list`
--

CREATE TABLE `why_choose_us_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `list_image` varchar(255) DEFAULT NULL,
  `list_heading` varchar(255) DEFAULT NULL,
  `list_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_list`
--

INSERT INTO `why_choose_us_list` (`id`, `user_id`, `list_image`, `list_heading`, `list_description`, `created_at`, `updated_at`) VALUES
(8, NULL, 'why_choose/OL4OlxLXtxPn1eXH5bL4NB4XCkRstP2BPrszpdhN.png', 'Reliable Technology Partner nn', 'You have a terrific company concept but are looking for a reliable tech partner to cooperate with? Vibrant Software...', '2025-07-22 03:24:04', '2025-07-22 03:34:27'),
(10, NULL, 'why_choose/vMuj6yuAN8O0JZr4ikQuntZviR56Hcvv30ESsVCJ.png', 'Skilled Staff', 'Our skilled staff stays on the cutting edge of the latest and the most successful technology...', '2025-07-22 03:24:04', '2025-07-22 03:35:06'),
(13, '1', 'why_choose/a2zcXJOVwA3OMxEauyjRNoSsBE2lxumm1qhDvhMZ.png', 'Customer Satisfaction', 'We provide the most successful projects, build long-term relationships\r\n                                        with our clients, and continue...', '2025-07-24 01:33:36', '2025-07-24 01:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_list_btn_setting`
--

CREATE TABLE `why_choose_us_list_btn_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `btn_label` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_list_btn_setting`
--

INSERT INTO `why_choose_us_list_btn_setting` (`id`, `user_id`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'Read More', 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/tables-basic.html', '2025-07-23 03:03:37', '2025-07-23 03:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_inquiry`
--
ALTER TABLE `about_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_technologies`
--
ALTER TABLE `about_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_counter_`
--
ALTER TABLE `about_us_counter_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_mission_vission`
--
ALTER TABLE `about_us_mission_vission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_gallery`
--
ALTER TABLE `aiml_home_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_gallery_tag`
--
ALTER TABLE `aiml_home_gallery_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero`
--
ALTER TABLE `aiml_home_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_about`
--
ALTER TABLE `aiml_home_hero_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_process`
--
ALTER TABLE `aiml_home_hero_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aiml_home_hero_services`
--
ALTER TABLE `aiml_home_hero_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_testimonials`
--
ALTER TABLE `award_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_categories`
--
ALTER TABLE `case_study_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_technologies`
--
ALTER TABLE `case_study_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_stories`
--
ALTER TABLE `client_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_stories_section`
--
ALTER TABLE `client_stories_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero`
--
ALTER TABLE `c_d_home_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_expertise`
--
ALTER TABLE `c_d_home_hero_expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_process`
--
ALTER TABLE `c_d_home_hero_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_home_hero_services`
--
ALTER TABLE `c_d_home_hero_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_d_inquiry`
--
ALTER TABLE `c_d_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_inquiry`
--
ALTER TABLE `dynamic_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_hero_sections`
--
ALTER TABLE `home_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_progress`
--
ALTER TABLE `our_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_progress_section`
--
ALTER TABLE `our_progress_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_values`
--
ALTER TABLE `our_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_values_sections`
--
ALTER TABLE `our_values_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smart_solutions`
--
ALTER TABLE `smart_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members_section`
--
ALTER TABLE `team_members_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `terms_meta_slug_unique` (`meta_slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_poster`
--
ALTER TABLE `testimonials_poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_list`
--
ALTER TABLE `why_choose_us_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_list_btn_setting`
--
ALTER TABLE `why_choose_us_list_btn_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_inquiry`
--
ALTER TABLE `about_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_technologies`
--
ALTER TABLE `about_technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_counter_`
--
ALTER TABLE `about_us_counter_`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_mission_vission`
--
ALTER TABLE `about_us_mission_vission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_gallery`
--
ALTER TABLE `aiml_home_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aiml_home_gallery_tag`
--
ALTER TABLE `aiml_home_gallery_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aiml_home_hero`
--
ALTER TABLE `aiml_home_hero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_about`
--
ALTER TABLE `aiml_home_hero_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_process`
--
ALTER TABLE `aiml_home_hero_process`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aiml_home_hero_services`
--
ALTER TABLE `aiml_home_hero_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `award_testimonials`
--
ALTER TABLE `award_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `case_study_categories`
--
ALTER TABLE `case_study_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_study_technologies`
--
ALTER TABLE `case_study_technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_stories`
--
ALTER TABLE `client_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_stories_section`
--
ALTER TABLE `client_stories_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `c_d_home_hero`
--
ALTER TABLE `c_d_home_hero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_home_hero_expertise`
--
ALTER TABLE `c_d_home_hero_expertise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_home_hero_process`
--
ALTER TABLE `c_d_home_hero_process`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_d_home_hero_services`
--
ALTER TABLE `c_d_home_hero_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_d_inquiry`
--
ALTER TABLE `c_d_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dynamic_inquiry`
--
ALTER TABLE `dynamic_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_hero_sections`
--
ALTER TABLE `home_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `our_progress`
--
ALTER TABLE `our_progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_progress_section`
--
ALTER TABLE `our_progress_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_values`
--
ALTER TABLE `our_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `our_values_sections`
--
ALTER TABLE `our_values_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smart_solutions`
--
ALTER TABLE `smart_solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members_section`
--
ALTER TABLE `team_members_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials_poster`
--
ALTER TABLE `testimonials_poster`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us_list`
--
ALTER TABLE `why_choose_us_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `why_choose_us_list_btn_setting`
--
ALTER TABLE `why_choose_us_list_btn_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
