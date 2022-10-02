<?php

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create(['position' => 'Sale Executives',
                    'job_description' => 'Conduct market research to identify selling possibilities and evaluate customer needs
                                            Actively seek out new sales opportunities through cold calling, networking and social media
                                            Set up meetings with potential clients and listen to their wishes and concerns',
                    'job_requirements' => 'Proven experience as a Sales Executive or relevant role
                                            Proficiency in English
                                            Excellent knowledge of MS Office
                                            Hands-on experience with CRM software is a plus
                                            Thorough understanding of marketing and negotiating techniques
                                            Fast learner and passion for sales',
                    'location' => 'YANGON',
                    'required_employee' => '5'
                    ]);
        Job::create(['position' => 'Business Analyst',
                    'job_description' => 'Financial modelling

                                            Variance Analysis

                                            Pricing

                                            Reporting

                                            Defining business
                                            requirements and reporting them back to stakeholders
                                            ',
                    'job_requirements' => 'Experience working with senior decision makers

                                            Strong communication/interpersonal skills

                                            Proven analytical background
                                            Advanced Excel skills
                                            ',
                    'location' => 'YANGON',
                    'required_employee' => '3'
                    ]);
        Job::create(['position' => 'Data Analyst',
                    'job_description' => 'using specialist tools to extract the data needed

                                            responding to data-related queries and keeping track of these
                                            analyzing data to identify trends

                                            setting up processes and systems to make working with data more efficient

                                            producing reports and charts communicating trends within data to non-specialists

                                            presenting information generated from data to clients and managers.
                                            ',
                    'job_requirements' => 'A high level of mathematical ability.

                                            The ability to analyse, model and interpret data.

                                            Problem-solving skills.
                                            A methodical and logical approach.

                                            The ability to plan work and meet deadlines.

                                            Accuracy and attention to detail.
                                            ',
                    'location' => 'YANGON',
                    'required_employee' => '1'
                    ]);
        Job::create(['position' => 'Product Manager',
                    'job_description' => 'Create buy-in for the product vision both internally and with key external partners

                                                Develop product pricing and positioning strategies

                                                Translate product strategy into detailed requirements and prototypes

                                                Scope and prioritize activities based on business and customer impact

                                                Work closely with engineering teams to deliver with quick time-to-market and optimal resources
                                            ',
                    'job_requirements' => 'Proven ability to develop product and marketing strategies and effectively communicate recommendations to executive management

                                                Solid technical background with understanding and/or hands-on experience in software development and web technologies

                                                Strong problem solving skills and willingness to roll up one’s sleeves to get the job

                                                Skilled at working effectively with cross functional teams in a matrix organization

                                                Excellent written and verbal communication skills.
                                            ',
                    'location' => 'YANGON',
                    'required_employee' => '1'
                    ]);
        Job::create(['position' => 'UX Specialist',
                    'job_description' => 'Create visually appealing and user-friendly web pages that move an audience to
                                            Analyzing UI flows

                                            Creating project timelines and deadlines

                                            Design work with less supervision, such as mock-ups for reporting, assist with low fidelity wire-framing, and development of instructional materials

                                            Ensure accessibility requirements are integrated in project workflows and roadmaps
                                            ',
                    'job_requirements' => 'Solid understanding of the web environment, GUI (screen layouts and composition)

                                                At least 5 years of job experience in UI/UX planning at emarket place (online shopping site)

                                                Experience working in an emarket place(online shopping site)

                                                Experience on web analytics and project leading

                                                Familiarity with third party components like DevExpress and Infragistics
                                            ',
                    'location' => 'YANGON',
                    'required_employee' => '2'
                    ]);
    }
}
