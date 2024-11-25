@extends('layouts.website.app')

@section('title', 'Pricing - Trucking 360')

@section('content')


{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<div class="bg-gray-100 font-sans">
        

    <main class="container mx-auto px-4 py-8 con">
   <!-- Hero Section -->
<section class="text-center py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold mb-6" style="color: #2e368f;"> <!-- Primary color applied -->
            Straightforward Pricing, Unmatched Value
        </h2>
        <div class="flex justify-between items-center max-w-5xl mx-auto"> <!-- Wide space between features -->
            <!-- Feature 1 -->
            <div class="flex items-center">
                <svg
                    class="w-6 h-6 text-green-500"
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
                <span class="text-lg font-bold text-gray-700">Straightforward pricing</span> <!-- No extra space -->
            </div>
            <!-- Feature 2 -->
            <div class="flex items-center">
                <svg
                    class="w-6 h-6 text-green-500"
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
                <span class="text-lg font-bold text-gray-700">Safety features are included for free in all plans</span> <!-- No extra space -->
            </div>
            <!-- Feature 3 -->
            <div class="flex items-center">
                <svg
                    class="w-6 h-6 text-green-500"
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
                <span class="text-lg font-bold text-gray-700">No hidden charges</span> <!-- No extra space -->
            </div>
        </div>
    </div>
</section>
<!-- Plans Section -->
<section class="mb-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto relative">
        <!-- Customizable Plan -->
        <div class="relative">
            <!-- Hidden Placeholder for Best Value -->
            <div class="invisible bg-primary text-white text-center font-bold text-lg py-2 w-full absolute top-[-20px] left-0 rounded-t-lg shadow-md">
                Placeholder
            </div>

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
                    <!-- Customizable Explanation -->
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
                    class="bg-secondary text-white px-6 py-3 w-full rounded-lg font-medium hover:bg-opacity-80 transition duration-300 mt-4"
                >
                    Get Started
                </button>
            </div>
        </div>

        <!-- Fantastic+ Bundle -->
        <div class="relative">
            <!-- Best Value Banner -->
            <div class="bg-primary text-white text-center font-bold text-lg py-2 w-full absolute top-[-20px] left-0 rounded-t-lg shadow-md">
                Best Value
            </div>

            <!-- Fantastic+ Bundle Card -->
            <div class="bg-white rounded-2xl shadow-lg flex flex-col justify-between h-full mt-6 p-8">
                <div class="flex flex-col justify-between flex-grow">
                    <h3 class="text-2xl font-bold mb-4 text-primary">
                        Fantastic+ Bundle
                    </h3>
                    <div class="flex items-center text-2xl font-bold mb-4">
                        <span class="total-wrapper">
                            <span class="dollar-sign">$</span>
                            <span id="total-price">125</span>
                        </span>
                        <span class="per-contracted ml-2">Per contracted tractor</span>
                    </div>
                    <p class="mb-4 text-gray-700">
                        Save <span class="font-bold">$80 monthly</span> and <span class="font-bold">$4,160 annually</span>
                        per contracted tractor by choosing the F+ Bundle plan.
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
            <h3 class="text-4xl font-extrabold mb-12 text-center text-gray-800 tracking-wide">Dispatch</h3>
            <div class="overflow-x-auto mb-12">
                <table
                    class="w-full bg-white shadow-md rounded-lg overflow-hidden"
                >
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Service</th>
                            <th class="py-3 px-4 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                24/7 On Road Monitoring
                            </td>
                            <td class="py-3 px-4 border-b">
                                We're always available to monitor drivers
                                and can update situations in the same moment
                                they occur
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Performance Disputes
                            </td>
                            <td class="py-3 px-4 border-b">
                                Whenever there is an issue that affects the
                                AFP's Operational Score. We can do the
                                disputes needed as soon as possible to
                                guarantee nothing Amazon Controllable can
                                affect their scores
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Hours Of Service Monitoring
                            </td>
                            <td class="py-3 px-4 border-b">
                                Driver's hours are monitored 24/7 to make
                                sure no violations would happen and plan
                                tours and actions based on drivers' hours
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Unassigned Drive Time Reconcile
                            </td>
                            <td class="py-3 px-4 border-b">
                                Whenever there are UADTs we can check them
                                for AFPs to make sure they're fully
                                compliant with Amazon and FMCSA rules
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Schedule Reminders
                            </td>
                            <td class="py-3 px-4 border-b">
                                Even tho we're sending the schedule to the
                                drivers. We send them reminders on their
                                tours a few hours before their trips and
                                then send them a form a head of time to make
                                sure they're attending and to make sure
                                issues will be solved before the start of
                                the trip
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Daily & Weekly Reporting
                            </td>
                            <td class="py-3 px-4 border-b">
                                Acceptance, On Time, and Operational Score
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                FMCSA tracking
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll make sure AFP's FMCSA scores are
                                within the threshold and will make plans and
                                coach drivers on how to maintain a good
                                FMCSA score
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Tracking Comdata cards and purchases
                            </td>
                            <td class="py-3 px-4 border-b">
                                Tracking inactive cards, troubleshooting
                                active cards that are not working, and
                                making sure all transactions have no
                                fraudulent
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Hours Of Service Exceptions Reconcile
                            </td>
                            <td class="py-3 px-4 border-b">
                                Whenever there is a need to use an Hours Of
                                Service exception (16 hours shift time
                                exception, adverse conditions exception), we
                                are available
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Hours Of Service (Yard Move/Personal
                                Conveyance) Reconcile
                            </td>
                            <td class="py-3 px-4 border-b">
                                Whenever there is a need to use YM or PC, we
                                can assist
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Driver Safety Checks
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll have drivers contact Dispatch whenever
                                they arrive at a site or whenever something
                                new happens so Dispatch are up to date and
                                can assist with any issues and plan
                                accordingly
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                ROC Communication
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll take the full responsibility and the
                                lead in communicating with ROC, creating
                                needed cases and fixing occurring problems
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Relay Load Notes
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll be in charge of adding notes of each
                                new update that happens. We'll make sure to
                                make the AFP look on the right side and that
                                it'll not affect its scores
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Accident / Incident Investigation &
                                Reporting
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll deal with incidents/accidents
                                professionally and will do all the needed
                                follow-ups. Have the situation documented,
                                investigated, and reported
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Talk & Text Availability 24/7
                            </td>
                            <td class="py-3 px-4 border-b">
                                We're always available to respond to texts
                                and calls whenever there is a need to do so.
                                We won't let any communication needed slip
                            </td>
                        </tr>
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">
                                    Saftey included
                                </th>
                                <th class="py-3 px-4 text-left">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Netradyne Reports
                            </td>
                            <td class="py-3 px-4 border-b">
                                We can keep track of Netradyne reports and
                                keep AFPs up to date on their behaviours
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Safety Coachings (Netradyne and/or Organic)
                            </td>
                            <td class="py-3 px-4 border-b">
                                Will do all the safety coachings on
                                Netradyne and on top of that we'll coach
                                drivers via WhatsApp and by call to help
                                them understand more and achieve better
                                scores
                            </td>
                        </tr>
                        <tr >
                            <td class="py-3 px-4 border-b">
                                Expectations and Coaching Call Before First
                                Tour
                            </td>
                            <td class="py-3 px-4 border-b">
                                We can give new drivers a call where we can
                                address everything needed in the work, how
                                to achieve better work, and what we are
                                expecting from them. This will maximize the
                                knowledge that drivers have
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Safety Campaigns
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll create and send safety content and
                                campaigns to keep drivers engaged in safety
                                and understand it better with simpler ways
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Company Safety Trend Analysis & Coaching
                            </td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Safety Reminders
                            </td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Smith System Training Coordination &
                                Selection
                            </td>
                            <td class="py-3 px-4 border-b">
                                Whenever drivers have areas where they can
                                make use of extra training. We can
                                coordinate with Smith System to have a class
                                and assign drivers to it. Also, we'll keep
                                track of drivers' attendance and if they
                                made use of those classes we assigned them
                                to
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Weather Monitoring
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll always monitor the weather and act
                                based on the new changes to the forecast to
                                make sure drivers are safe
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="text-4xl font-extrabold mb-12 text-center text-gray-800 tracking-wide">
                Fleet
            </h3>
                        <div class="overflow-x-auto mb-12">
                <table
                    class="w-full bg-white shadow-md rounded-lg overflow-hidden"
                >
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Service</th>
                            <th class="py-3 px-4 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fleet Section -->
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Tracking Annual Inspections
                            </td>
                            <td class="py-3 px-4 border-b">
                                Trucks' annual inspections are a DOT
                                requirement to have it updated and not
                                expired. We'll keep track of those
                                inspections and be on the lookout for any
                                that might expire soon and provide the
                                latest copy available to make sure AFPs are
                                within DOT requirements
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Repair Orders' Invoice Tracking
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll keep track of all Repair Orders done
                                for AFPs' tractors, their dates, vendors,
                                and amounts so AFPs can know everything
                                they're paying that is fleet related
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Pilot Allowance Tracking and Comparing
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll keep tracking AFPs' pilot allowance
                                and compare it with data available from our
                                reports to make sure that AFPs are not
                                paying more money than needed
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Partner-Managed Repairs Reimbursements and
                                Tracking
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll issue a reimbursement for
                                Partner-managed Repairs and keep track of
                                those reimbursements until the amount needed
                                is paid and AFPs have their money back
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Partner-Managed Repairs Archive
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll have an archive of reimbursements for
                                Partner-managed Repairs so AFPs can know
                                what they got back and when
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Work Order Creation & Tracking
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll always be on the lookout for any Work
                                Order creation need and we'll be responsible
                                for creating it, tracking it, and closing it
                                while flipping the unit back to active once
                                it's finished
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Escalations</td>
                            <td class="py-3 px-4 border-b">
                                We'll be responsible for any escalation
                                needed for any issue that AFPs are not able
                                to solve
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Mechanical Tractor Disputes
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll be responsible for any mechanical
                                tractor disputes that are not Carrier
                                Controllable
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Amerit Communication 24/7
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll be available 24/7 to communicate and
                                answer Amerit
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                DSS Communication 24/7
                            </td>
                            <td class="py-3 px-4 border-b">
                                We'll be available 24/7 to communicate and
                                answer DSS
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                T360 Network Sourced Parts Rate
                            </td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">
                                Partner Parts Sourcing
                            </td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">
                                    Saftey included
                                </th>
                                <th class="py-3 px-4 text-left">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="py-3 px-4 border-b">Trucks Handling Campaigns</td>
                            <td class="py-3 px-4 border-b">We'll create and send content and campaigns on how to handle tractors to help drivers know better on how to deal with tractors and maintain tractors at top health statuses at all times</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Defects Data Archive</td>
                            <td class="py-3 px-4 border-b">Keep track of trucks' defects and create an archive so AFPs can be up to date</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Tractors' Health Report</td>
                            <td class="py-3 px-4 border-b">We'll keep AFPs up to date on their tractors' health while keeping track of tractors' defects, the reason behind them, any new updates, and estimated fix days based on new updates</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Driver Damage Report</td>
                            <td class="py-3 px-4 border-b">We can keep track of issues that are done by drivers (incidents, accidents, false reports, and damages) to make sure AFPs have the data on what drivers are doing to their tractors</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <h3 class="text-4xl font-extrabold mb-12 text-center text-gray-800 tracking-wide">Hiring</h3>
            <div class="overflow-x-auto mb-12">
                <table
                    class="w-full bg-white shadow-md rounded-lg overflow-hidden"
                >
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Service</th>
                            <th class="py-3 px-4 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4 border-b">MVR Review</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">SPHRR Review</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">One-Way Interviews</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Phone Screening</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Job Postings & Advertising</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Expiring Driver Document Tracking</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Drug Test Follow-Up</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">CDL & Finishing School Programs</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Assist JJ Keller</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Maintain Healthy Pipeline</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">EEO Guidelines & Best Practices</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Fountain Management</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <h3 class="text-4xl font-extrabold mb-12 text-center text-gray-800 tracking-wide">HR</h3>
            <div class="overflow-x-auto mb-12">
                <table
                    class="w-full bg-white shadow-md rounded-lg overflow-hidden"
                >
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Service</th>
                            <th class="py-3 px-4 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4 border-b">Scheduling Assistance</td>
                            <td class="py-3 px-4 border-b">We provide tailored scheduling assistance to ensure drivers are assigned trips efficiently while meeting Hours of Service requirements. Our support helps AFPs maintain on-time performance and minimizes downtime, keeping operations streamlined and productive.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Payroll Administration</td>
                            <td class="py-3 px-4 border-b">Ensuring drivers are paid accurately and on time is essential for maintaining satisfaction and trust. We handle payroll administration by tracking hours worked between Relaay and ADP. Our service streamlines the payroll process, reduces errors, and provides AFPs with peace of mind knowing their drivers are compensated correctly.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Value Added Partners (T360 Org.)</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Virtual Orientation</td>
                            <td class="py-3 px-4 border-b">Introducing new drivers to your company is crucial for setting the tone and expectations. Our Virtual Orientation service provides a comprehensive onboarding experience, covering company policies, safety protocols, and operational procedures. This remote solution ensures drivers are well-prepared and equipped to succeed, saving time while maintaining a professional and consistent onboarding process.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Integration of Drivers into Systems</td>
                            <td class="py-3 px-4 border-b">We handle the integration process by setting up driver profiles in platforms such as Relay, ADP, UIIA, and Netradyne. This ensures accurate data tracking, smooth communication, and compliance, allowing AFPs to focus on their core operations without administrative delays.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Health Benefits Tracking</td>
                            <td class="py-3 px-4 border-b">We manage the administration and monitoring of health benefit enrollments, updates, and expirations. Our service ensures drivers have access to their benefits without interruptions, helping AFPs maintain compliance and support a healthy workforce.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Workplace Injury Tracking & Mitigation</td>
                            <td class="py-3 px-4 border-b">We track workplace injuries to identify trends, address root causes, and develop mitigation strategies. We also take care of OSHA reporting processes to ensure compliance.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Insurance Reviews</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">CAPs (If Wanted)</td>
                            <td class="py-3 px-4 border-b">We create tailored Corrective Action Plans to help drivers improve their performance and adhere to company policies. These plans include clear actions, deadlines, and follow-ups to ensure accountability and foster continuous improvement.</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Just-Cause Terminations</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Employee File Tracking & Documentation</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Driver Scorecards (Daily, Weekly, Monthly)</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Intermodal Training</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Employee Engagement Program</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th class="py-3 px-4 text-left">
                                    Saftey included
                                </th>
                                <th class="py-3 px-4 text-left">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tr >
                            <td class="py-3 px-4 border-b">Netradyne Safety Feedback (Safety Disputes)</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-b">Safety Competitions</td>
                            <td class="py-3 px-4 border-b">NEED INFO</td>
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

.dollar-sign {
    color: white;
    font-weight: bold;
}
    

.per-contracted {
    font-size: 0.9rem; /* Slightly smaller than the total */
    color: #555; /* Subtle gray color */
    margin-left: 8px; /* Adds space between total and text */
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


