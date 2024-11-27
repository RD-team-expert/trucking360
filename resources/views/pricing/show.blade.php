@extends('layouts.website.app')

@section('title', 'Pricing - Trucking 360')

@section('content')


{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<div class="bg-gray-100 font-sans">
        

    <main class="container mx-auto px-4 py-8 con">
<!-- Plans Section -->
<section class="mb-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto relative">
        <!-- Customizable Plan -->
        <div class="relative plan-card" data-aos="fade-up" data-aos-delay="200">
            <!-- Customizable Plan Card -->
            <div class="bg-white p-8 rounded-2xl shadow-lg flex flex-col justify-between h-full mt-6">
                <div class="flex flex-col justify-between flex-grow">
                    <h3 class="text-2xl font-bold mb-4 text-primary">
                        Customizable Plan
                    </h3>
                    <div class="flex items-center text-2xl font-bold mb-4">
                        Total:
                        <span class="total-wrapper ml-2">
                            <span class="dollar-sign">$</span>
                            <span id="total-price">145</span>
                        </span>
                        <span class="per-contracted ml-2">Per contracted tractor</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Build your own plan by selecting or unselecting the services below to perfectly match your business needs.
                    </p>
                    <div class="mb-4">
                        <label class="block mb-2 text-gray-700 font-medium">
                            Select Services:
                        </label>
                        <div class="space-y-4">
                            <label class="flex items-center">
                                <input
                                    type="checkbox"
                                    class="form-checkbox text-primary focus:ring-primary"
                                    value="75"
                                    data-service="Dispatch"
                                    checked
                                />
                                <span class="ml-2 text-gray-700">
                                    Dispatch ($75)
                                </span>
                            </label>
                            <label class="flex items-center">
                                <input
                                    type="checkbox"
                                    class="form-checkbox text-primary focus:ring-primary"
                                    value="20"
                                    data-service="Fleet"
                                    checked
                                />
                                <span class="ml-2 text-gray-700">
                                    Fleet ($20)
                                </span>
                            </label>
                            <label class="flex items-center">
                                <input
                                    type="checkbox"
                                    class="form-checkbox text-primary focus:ring-primary"
                                    value="25"
                                    data-service="Hiring"
                                    checked
                                />
                                <span class="ml-2 text-gray-700">
                                    Hiring ($25)
                                </span>
                            </label>
                            <label class="flex items-center">
                                <input
                                    type="checkbox"
                                    class="form-checkbox text-primary focus:ring-primary"
                                    value="25"
                                    data-service="HR"
                                    checked
                                />
                                <span class="ml-2 text-gray-700">
                                    HR ($25)
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="bg-primary text-white px-6 py-3 w-full rounded-lg font-medium hover:bg-opacity-80 transition duration-300 mt-4"
                >
                    Get Started
                </button>
            </div>
        </div>

        <!-- Fantastic+ Bundle -->
        <div class="relative plan-card" data-aos="fade-up" data-aos-delay="400">
            <!-- Fantastic+ Bundle Card -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col justify-between h-full mt-6 p-8">
                <div class="flex flex-col justify-between flex-grow">
                    <h3 class="text-2xl font-bold mb-4 text-primary">
                        Fantastic+ Bundle
                    </h3>
                    <div class="flex items-center text-2xl font-bold mb-4">
                        Total:
                        <span class="total-wrapper-red ml-2">
                            <span class="dollar-sign">$</span>
                            <span id="total-price">125</span>
                        </span>
                        <span class="per-contracted ml-2">Per contracted tractor</span>
                    </div>
                    <p class="mb-4 text-gray-700">
                        Save <span class="font-bold">$80 monthly</span> and <span class="font-bold">$4,160 annually</span>
                        <span class="font-bold">per contracted tractor</span> by choosing the F+ Bundle plan.
                    </p>
                    <ul class="mb-6 space-y-4">
                        <li class="flex items-start text-gray-700">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <span><strong>Dispatch</strong></span>
                        </li>
                        <li class="flex items-start text-gray-700">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <span><strong>Fleet</strong></span>
                        </li>
                        <li class="flex items-start text-gray-700">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <span><strong>Hiring</strong></span>
                        </li>
                        <li class="flex items-start text-gray-700">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <span><strong>HR</strong></span>
                        </li>
                    </ul>
                </div>
                <!-- Button -->
                <button
                    class="bg-secondary text-white px-6 py-3 w-full rounded-lg font-medium hover:bg-opacity-80 transition duration-300 mt-4 self-end"
                >
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>




        <!-- Dispatch Section -->
        <section class="mb-16 py-16">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-12" data-aos="zoom-in" data-aos-delay="800">
                <table class="w-full text-sm text-center text-gray-900 border border-gray-300">
                    <!-- Dispatching Services Header -->
                    <thead>
                        <tr class="bg-primary text-white border-b border-gray-300">
                            <th colspan="2" class="text-2xl font-bold px-6 py-4">
                                Dispatching Services
                            </th>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-300">
                            <th scope="col" class="px-6 py-3">Service</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                        </tr>
                    </thead>
                    <!-- Dispatching Services Body -->
                    <tbody>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">24/7 On Road Monitoring</td>
                            <td class="px-6 py-4">Ensures drivers are monitored around the clock with real-time updates for seamless operations.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Performance Disputes</td>
                            <td class="px-6 py-4">Handles performance disputes impacting the AFP's Operational Score, preventing negative effects from Amazon-controllable factors.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Hours Of Service Monitoring</td>
                            <td class="px-6 py-4">Monitors driver hours continuously to prevent violations and optimize scheduling.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Unassigned Drive Time Reconcile</td>
                            <td class="px-6 py-4">Reconciles unassigned drive time to maintain compliance with Amazon policy and FMCSA regulations.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Schedule Reminders</td>
                            <td class="px-6 py-4">Provides timely schedule reminders to drivers, helping them stay on track and proactively address potential challenges before their scheduled trips.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Daily & Weekly Reporting</td>
                            <td class="px-6 py-4">Delivers detailed reports on Acceptance, On-Time Performance, and Operational Excellence Scores on a daily and weekly cadence to stay up to date with your company’s KPI’s.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Tracking Comdata Cards and Purchases</td>
                            <td class="px-6 py-4">Manages Comdata card activity, resolves issues, and ensures secure transactions.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Hours Of Service Exceptions Reconcile</td>
                            <td class="px-6 py-4">Supports proper usage of HOS exceptions, including shift time and adverse conditions allowances.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Hours Of Service (Yard Move/Personal Conveyance) Reconcile</td>
                            <td class="px-6 py-4">Provides assistance for utilizing Yard Move or Personal Conveyance exceptions effectively, in compliance of the regulations.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Driver Safety Checks</td>
                            <td class="px-6 py-4">Requires drivers to report key updates to ensure timely assistance, issue resolution and reassurance of safe driving practices.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">ROC Communication</td>
                            <td class="px-6 py-4">Handles ROC communications, including case creation and issue resolution, for seamless workflow allowing for drivers to focus more on driving.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Relay Load Notes</td>
                            <td class="px-6 py-4">Maintains detailed load notes to safeguard AFPs' scores and operational performance.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Accident / Incident Investigation & Reporting</td>
                            <td class="px-6 py-4">Manages accident and incident processes, ensuring thorough documentation and resolution from start to finish.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Talk & Text Availability 24/7</td>
                            <td class="px-6 py-4">Ensures dedicated support availability to your drivers around the clock via prompt responses to calls and messages.</td>
                        </tr>
            
                        <!-- Safety Header -->
                        <tr class="bg-secondary text-white border-b border-gray-300">
                            <th colspan="2" class="text-lg font-bold px-6 py-4">
                                Safety and Support Services
                            </th>
                        </tr>
            
                        <!-- Safety Services -->
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Netradyne Reports</td>
                            <td class="px-6 py-4">Monitors Netradyne reports and provides real-time updates on driver behavior.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Coachings (Netradyne and/or Organic)</td>
                            <td class="px-6 py-4">Delivers driver coaching through Netradyne and other channels to improve safety scores and awareness.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Campaigns</td>
                            <td class="px-6 py-4">Creates engaging campaigns that promote driver safety using impactful methods.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Reminders</td>
                            <td class="px-6 py-4">Reinforces best practices with regular safety reminders, tips and tricks.</td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Smith System Training Coordination & Selection</td>
                            <td class="px-6 py-4">Coordinates Smith System training for drivers and tracks their progress post-completion.</td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Weather Monitoring</td>
                            <td class="px-6 py-4">Monitors weather conditions and adjusts plans strategically to prioritize driver safety.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-12">
                <table class="w-full text-sm text-center text-gray-900 border border-gray-300">
                    <!-- Fleet Services Header -->
                    <thead>
                        <tr class="bg-primary text-white border-b border-gray-300">
                            <th colspan="2" class="text-2xl font-bold px-6 py-4">
                                Fleet Services
                            </th>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-300">
                            <th scope="col" class="px-6 py-3">Service</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                        </tr>
                    </thead>
                    <!-- Fleet Services Body -->
                    <tbody>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Annual Inspections Tracking</td>
                            <td class="px-6 py-4">
                                Ensures trucks' annual inspections are tracked and kept current to meet DOT requirements by identifying inspections nearing expiration, coordinating with on-site maintenance vendors and providing updated documentation.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Repair Orders' Invoice Tracking</td>
                            <td class="px-6 py-4">
                                Tracks all repair orders for tractors, including dates, vendors, and costs, providing a comprehensive record of fleet-related expenses.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Pilot Allowance Tracking and Comparing</td>
                            <td class="px-6 py-4">
                                Monitors maintenance pilot allowance and compares it with report data to identify and prevent unnecessary expenditures.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Partner-Managed Repairs Reimbursements and Tracking</td>
                            <td class="px-6 py-4">
                                Issues reimbursement documentation for partner-managed repairs and tracks payments until completion, ensuring accuracy and accountability.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Partner-Managed Repairs Archive</td>
                            <td class="px-6 py-4">
                                Maintains an archive of partner-managed repair reimbursements, providing a detailed history of received amounts and timelines.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Work Order Creation & Tracking</td>
                            <td class="px-6 py-4">
                                Oversees the creation, tracking, and closure of work orders while ensuring units return to active status promptly for maximum tractor uptime.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Escalations</td>
                            <td class="px-6 py-4">
                                Handles escalations for unresolved issues, ensuring swift and effective resolutions.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Mechanical Tractor Disputes</td>
                            <td class="px-6 py-4">
                                Manages disputes related to mechanical tractor issues that are not carrier-controllable to ensure the highest operational excellence score is achieved.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">On-Site Maintenance Vendor Communication 24/7</td>
                            <td class="px-6 py-4">
                                Provides 24/7 availability for on-site maintenance vendor communications, ensuring timely responses and issue resolution.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">DSS Communication 24/7</td>
                            <td class="px-6 py-4">
                                Offers round-the-clock support for DSS communications to address inquiries and concerns promptly.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Trucks Handling Campaigns</td>
                            <td class="px-6 py-4">
                                Develops and shares campaigns to educate drivers on proper tractor handling and maintenance for optimal performance and overall fleet health.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Defects Data Archive</td>
                            <td class="px-6 py-4">
                                Maintains and organizes truck defect records, providing AFPs with accurate, up-to-date information to support informed decisions, streamline maintenance, and ensure compliance.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Tractors' Health Report</td>
                            <td class="px-6 py-4">
                                Provides comprehensive updates on tractor health, including defect causes, repair timelines, and ongoing maintenance needs.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Driver Damage Report</td>
                            <td class="px-6 py-4">
                                Tracks driver-related incidents, accidents, false reports, and damages, delivering actionable data for fleet management and accountability.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-12">
                <table class="w-full text-sm text-center text-gray-900 border border-gray-300">
                    <!-- Hiring Services Header -->
                    <thead>
                        <tr class="bg-primary text-white border-b border-gray-300">
                            <th colspan="2" class="text-2xl font-bold px-6 py-4">
                                Hiring Services
                            </th>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-300">
                            <th scope="col" class="px-6 py-3">Service</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                        </tr>
                    </thead>
                    <!-- Hiring Services Body -->
                    <tbody>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">MVR Review</td>
                            <td class="px-6 py-4">
                                Reviews Motor Vehicle Reports (MVR) to ensure compliance with safety and qualification standards, tailored to the AFPs desires.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">SPHRR Review</td>
                            <td class="px-6 py-4">
                                Conducts Safety Performance History Record reviews to identify and address potential hiring risks.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">One-Way Interviews</td>
                            <td class="px-6 py-4">
                                Facilitates one-way interviews to streamline the candidate screening process.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Phone Screening</td>
                            <td class="px-6 py-4">
                                Performs phone screenings to evaluate candidate qualifications and fit for the role.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Job Postings & Advertising</td>
                            <td class="px-6 py-4">
                                Creates and manages job postings and advertising campaigns to attract the right talent.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Expiring Driver Document Tracking</td>
                            <td class="px-6 py-4">
                                Monitors and tracks expiring driver documents to ensure timely renewal and compliance.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Drug Test Follow-Up</td>
                            <td class="px-6 py-4">
                                Coordinates and tracks drug test follow-ups to meet regulatory and company requirements.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">CDL & Finishing School Programs</td>
                            <td class="px-6 py-4">
                                Manages the partnership for CDL and finishing school programs to build a qualified driver pipeline.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Assist JJ Keller</td>
                            <td class="px-6 py-4">
                                Provides support and coordination with JJ Keller for compliance and driver management solutions.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Maintain Healthy Pipeline</td>
                            <td class="px-6 py-4">
                                Implements strategies to maintain a robust pipeline of qualified candidates to ensure staffing is never an issue.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">EEO Guidelines & Best Practices</td>
                            <td class="px-6 py-4">
                                Ensures adherence to Equal Employment Opportunity guidelines and best practices in recruitment and hiring.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Fountain Management</td>
                            <td class="px-6 py-4">
                                Oversees the management of Fountain to optimize hiring workflows, organization and candidate experience.
                            </td>
                        </tr>
            
                        <!-- Safety Header -->
                        <tr class="bg-secondary text-white border-b border-gray-300">
                            <th colspan="2" class="text-lg font-bold px-6 py-4">
                                Safety and Support Services
                            </th>
                        </tr>
            
                        <!-- Safety Services -->
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Campaigns</td>
                            <td class="px-6 py-4">
                                Creates engaging campaigns that promote driver safety using impactful methods.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Reminders</td>
                            <td class="px-6 py-4">
                                Reinforces best practices with regular safety reminders, tips and tricks.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Driver Safety Checks</td>
                            <td class="px-6 py-4">
                                Requires drivers to report key updates to ensure timely assistance, issue resolution and reassurance of safe driving practices.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-12">
                <table class="w-full text-sm text-center text-gray-900 border border-gray-300">
                    <!-- HR Services Header -->
                    <thead>
                        <tr class="bg-primary text-white border-b border-gray-300">
                            <th colspan="2" class="text-2xl font-bold px-6 py-4">
                                HR Services
                            </th>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-300">
                            <th scope="col" class="px-6 py-3">Service</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                        </tr>
                    </thead>
                    <!-- HR Services Body -->
                    <tbody>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Scheduling Assistance</td>
                            <td class="px-6 py-4">
                                Offers tailored scheduling support to assign trips efficiently while meeting Hours of Service requirements, minimizing downtime and maintaining on-time performance.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Payroll Administration</td>
                            <td class="px-6 py-4">
                                Handles payroll administration by tracking hours worked through Relay and ADP, ensuring drivers are paid accurately and on time, streamlining processes and reducing errors.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Virtual Orientation</td>
                            <td class="px-6 py-4">
                                Provides a comprehensive onboarding experience covering company policies, safety protocols, and operational procedures to prepare drivers for success in a remote, professional format.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Integration of Drivers into Systems</td>
                            <td class="px-6 py-4">
                                Manages the setup of driver profiles in platforms such as Relay, ADP, UIIA, and Netradyne, ensuring accurate data tracking and compliance.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Health Benefits Tracking</td>
                            <td class="px-6 py-4">
                                Administers and monitors health benefit enrollments, updates, and expirations, ensuring uninterrupted access and regulatory compliance.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Workplace Injury Tracking & Mitigation</td>
                            <td class="px-6 py-4">
                                Tracks workplace injuries, identifies trends, addresses root causes, and develops mitigation strategies, including OSHA reporting to ensure compliance.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Insurance Reviews</td>
                            <td class="px-6 py-4">
                                Conducts thorough reviews of insurance policies to ensure optimal coverage and compliance, at the best premium price.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">CAPs (Optional)</td>
                            <td class="px-6 py-4">
                                Develops tailored Corrective Action Plans with clear actions, deadlines, and follow-ups to support performance improvement and accountability.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Just-Cause Terminations</td>
                            <td class="px-6 py-4">
                                Facilitates just-cause terminations in compliance with legal and organizational standards, approved by the AFP Business Owner.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Employee File Tracking & Documentation</td>
                            <td class="px-6 py-4">
                                Maintains accurate and organized employee files and documentation for compliance and operational efficiency.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Driver Scorecards (Daily, Weekly, Monthly)</td>
                            <td class="px-6 py-4">
                                Generates detailed driver performance scorecards to track and enhance operational metrics.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Intermodal Training</td>
                            <td class="px-6 py-4">
                                Provides specialized training programs for intermodal operations to enhance driver skills and performance of transporting intermodal containers.
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Employee Engagement Program</td>
                            <td class="px-6 py-4">
                                Develops initiatives to boost employee engagement, morale, and retention through strategic programming.
                            </td>
                        </tr>
            
                        <!-- Safety Header -->
                        <tr class="bg-secondary text-white border-b border-gray-300">
                            <th colspan="2" class="text-lg font-bold px-6 py-4">
                                Safety and Support Services
                            </th>
                        </tr>
            
                        <!-- Safety Services -->
                        <tr class="bg-white border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Netradyne Safety Feedback (Safety Disputes)</td>
                            <td class="px-6 py-4">
                                Handles safety feedback and disputes through Netradyne, ensuring fairness and compliance.
                            </td>
                        </tr>
                        <tr class="bg-primary/10 border-b border-gray-300">
                            <td class="px-6 py-4 font-medium">Safety Competitions</td>
                            <td class="px-6 py-4">
                                Organizes safety competitions to promote best practices and driver engagement in safety protocols.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </section>

        <!-- FAQs Section -->
        <section class="py-10 bg-gray-100">
            <div class="max-w-4xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-8 text-gray-800">
                    Frequently Asked Questions
                </h3>
                <div class="space-y-4" id="faq-accordion">
                    <!-- FAQ items will be dynamically inserted here -->
                    
                        <div class="p-4 text-gray-600 hidden">
                            <!-- Answer content dynamically added here -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-6 text-center">
                <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg inline-block">
                    <h2 class="text-3xl font-bold text-primary mb-4">Ready to Take Your Logistics to the Next Level?</h2>
                    <p class="text-gray-700 mb-6">
                        Let’s discuss tailored solutions to maximize your efficiency.
                    </p>
                    <a href="{{url('bookings/create')}}"
                       class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300">
                        Book a Meeting
                    </a>
                </div>
            </div>
        </section>
        
        
    </main>
    <style>
        @keyframes pulse {
            0%,
            100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        /* Center and control the width of the grid on larger screens */
       
    
  /* Adjust Best Value Banner */
  .best-value-banner {
        position: absolute;
        top: -20px; /* Adjust this value to push it higher or lower */
        left: 0;
        width: 100%;
        background-color: #2e368f; /* Primary color */
        color: white;
        text-align: center;
        font-weight: bold;
        font-size: 1.125rem; /* Text size equivalent to text-lg */
        padding: 0.5rem; /* Padding for banner */
        border-radius: 0.5rem 0.5rem 0 0; /* Rounded top corners */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }
    
        /* Maintain responsiveness */
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr; /* Stack cards on smaller screens */
            }
        }
    
        .con{
            padding-top: 5rem; 
        }

        .total-wrapper {
    background: #2e368f;
    border-radius: 8px;
    text-align: center;
    padding: 1px 6px;
    color: white;
    display: inline-flex;
    align-items: center;
    gap: 2px; /* Optional: To add small space between $ and the value */
}

.total-wrapper-red {
    background: #e93232;
    border-radius: 8px;
    text-align: center;
    padding: 1px 6px;
    color: white;
    display: inline-flex;
    align-items: center;
    gap: 2px; /* Optional: To add small space between $ and the value */
}

.dollar-sign {
    color: white;
    font-weight: bold;
}
    

.per-contracted {
    font-size: 0.9rem; /* Slightly smaller than the total */
    color: #555; /* Subtle gray color */
    margin-left: 8px; /* Adds space between total and text */
}
    /* General Styles */
    .feature-item {
        position: relative; /* Create a relative container for the icon */
        display: inline-block; /* Inline-block for proper alignment */
        padding-left: 2.5rem; /* Create space for the SVG icon */
        text-align: center; /* Center text */
        font-weight: bold; /* Make text bold */
        color: #28a745; /* Green color for text */
    }

    .feature-item::before {
        content: ''; /* Add an empty pseudo-element for the SVG icon */
        position: absolute;
        top: 50%; /* Center vertically */
        left: 0; /* Position to the left */
        transform: translateY(-50%); /* Adjust for vertical alignment */
        width: 1.5rem; /* Set width for the SVG icon */
        height: 1.5rem; /* Set height for the SVG icon */
        background: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%2328a745%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M5 13l4 4L19 7%27/%3E%3C/svg%3E') no-repeat center center;
        background-size: contain; /* Ensure the icon fits within the element */
    }

    /* Desktop Specific Styles */
    @media (min-width: 768px) {
        .features-container {
            display: flex;
            justify-content: space-between; /* Even spacing for desktop */
            max-width: 100%;
        }
    }

    /* Mobile Specific Styles */
    @media (max-width: 768px) {
        .features-container {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            gap: 1rem; /* Add spacing between stacked items */
            text-align: left; /* Align text to the left on mobile */
        }

        .feature-item {
            padding-left: 2.5rem; /* Maintain space for SVG icon */
        }
    }

        /* Add spacing between plans on smaller screens */
        @media (max-width: 768px) {
        .plan-card {
            margin-bottom: 1.5rem; /* Adjust spacing as needed */
        }
    }
    </style>

</div>


<script>
    // Calculate total price for customizable plan
    const checkboxes = document.querySelectorAll(
        'input[type="checkbox"]'
    );
    const totalPriceElement = document.getElementById("total-price");

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", updateTotalPrice);
    });

    function updateTotalPrice() {
        let total = 0;
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                total += parseInt(checkbox.value);
            }
        });
        totalPriceElement.textContent = total;
    }

    // Tooltip functionality
    const tooltipButtons = document.querySelectorAll("[data-tooltip]");
    tooltipButtons.forEach((button) => {
        button.addEventListener("mouseenter", showTooltip);
        button.addEventListener("mouseleave", hideTooltip);
    });

    function showTooltip(event) {
        const tooltip = document.createElement("div");
        tooltip.textContent = event.target.dataset.tooltip;
        tooltip.className =
            "absolute bg-gray-800 text-white p-2 rounded text-sm z-10";
        document.body.appendChild(tooltip);

        const rect = event.target.getBoundingClientRect();
        tooltip.style.top = `${rect.bottom + window.scrollY + 5}px`;
        tooltip.style.left = `${rect.left + window.scrollX}px`;
    }

    function hideTooltip() {
        const tooltip = document.querySelector(".absolute.bg-gray-800");
        if (tooltip) {
            tooltip.remove();
        }
    }

    // FAQ Accordion
    const faqData = [
        {
            question:
                "How does the Per Accepted Contract pricing work?",
            answer: "We keep billing straightforward and aligned with your usage. Each week, you're only billed for the contracts you accept. For example, if you have 17 contracted tractors but only accept 15 contracts, you'll only be billed for those 15. If you're using our dispatching service at $75 per contract, your weekly bill would be 15 x $75 = $1,125. For those on our Fantastic+ bundle, covering dispatch, hiring, HR, and fleet services, the rate is $125 per contract, so you'd pay 15 x $125 = $1,875. Our goal is to make billing transparent and flexible, matching your operational pace.",
        },
        {
            question:
                "Why is Per Accepted Contract pricing beneficial to me?",
            answer: "Our per-accepted contract pricing provides flexibility and savings, ensuring you only pay for active operations. Unlike flat-rate models that charge regardless of tractor status, our approach aligns costs with your actual usage—no unnecessary charges if a tractor is down. This way, you maximize value, paying only for what's actively moving your business forward.",
        },
        {
            question: "Will my pricing change if I add more tractors?",
            answer: "The rate per accepted contract stays consistent, so you know what to expect! However, accepting more contracts will increase the total amount billed, based on how many contracts you accept that week. For instance, if you accepted 14 contracts at our dispatching rate of $75, your bill would be 14 x $75 = $1,050. With 15 contracts, it would be 15 x $75 = $1,125. For Fantastic+ bundle users at $125 per accepted contract, the bill would be 14 x $125 = $1,750, and for 15 accepted contracts, 15 x $125 = $1,875. This predictable per-unit pricing scales with your operations while keeping costs transparent.",
        },
        {
            question: "Will I pay for a rejected contract?",
            answer: "No, we only bill for contracts you accept. If a contract is rejected, there's no charge, regardless of whether you're on our Fantastic+ bundle or just the dispatching service. Our commitment is to ensure billing reflects the work accepted, so you can focus on what counts.",
        },
        {
            question:
                "Why is it beneficial to bill per accepted contract for hiring, fleet, HR, and other services?",
            answer: "Our service billing is tied to your accepted contract count to adapt to your operational needs. If you're running fewer contracts, you won't pay a flat fee for services like hiring, HR, and fleet management. Instead, your costs decrease with usage, ensuring fair pricing without locking you into fixed rates. It's a flexible model designed to optimize your expenses as your operations fluctuate.",
        },
        {
            question: "Why do you bill weekly?",
            answer: "Weekly billing is designed to stay in sync with your business. By billing per accepted contract each week, we offer precise billing that reflects any changes in your accepted contracts. This way, you're always paying accurately for what you actually use, supporting a flexible and transparent billing cycle.",
        },
        {
            question: "Are there any hidden fees or setup costs?",
            answer: "Not at all—our pricing is completely transparent. You're billed based solely on the accepted contracts each week, with no hidden fees or setup costs. We want you to feel confident in exactly what you're paying for.",
        },
        {
            question: "Am I locked into a contract?",
            answer: "No, you have complete flexibility. You can cancel at any time with just a one-week notice, giving you full control over your service commitments. We're here to support you as your needs evolve.",
        },
        {
            question:
                "How does billing work if a tractor breaks down during the week?",
            answer: "If your tractor experiences a breakdown during an accepted contract, rest assured that you'll still be billed solely for the accepted contract amount, without any extra charges. Should you choose to continue the contract with a Permaloaner or a different tractor from your fleet, there's no need to worry—our goal is to ensure your operations can carry on smoothly without unexpected costs. We're here to support you through any challenges!",
        },
        {
            question:
                "How do you track the daily Operational Excellence Score?",
            answer: "We have proprietary technology that will enable us to provide you with a daily Operational Excellence Score that will take into account previous day acceptance and on-time metrics.",
        },
    ];

    const faqContainer = document.getElementById("faq-accordion");

    faqData.forEach((faq, index) => {
        const faqItem = document.createElement("div");
        faqItem.className = "border-b border-gray-200";
        faqItem.innerHTML = `
        <button class="flex justify-between items-center w-full py-4 px-6 text-left hover:bg-gray-50 focus:outline-none" id="faq-button-${index}">
            <span class="font-medium">${faq.question}</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div class="hidden px-6 pb-4" id="faq-answer-${index}">
            <p>${faq.answer}</p>
        </div>
    `;
        faqContainer.appendChild(faqItem);

        const button = faqItem.querySelector(`#faq-button-${index}`);
        const answer = faqItem.querySelector(`#faq-answer-${index}`);
        const icon = button.querySelector("svg");

        button.addEventListener("click", () => {
            answer.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        });
    });
</script>
@endsection


