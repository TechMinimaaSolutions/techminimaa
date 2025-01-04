@extends('layouts.app')

@section('title', 'request-demo')

@section('content')

<section class="breadcrumbs-sec  pb-0 overflow-hidden bg-gradient-to-r from-white via-blue-200 to-pink-200">
    <div class="container relative mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="lg:w-1/2 mb-4">
                <div class="me-md-5">
                    <h1 class="text-4xl font-bold leading-tight mb-4 mt-4">
                        <span class="block">Behold</span>
                        <span class="text-blue-500">Inventia Technology</span>
                        <span class="block">in action</span>
                    </h1>
                    <p class="mb-5 text-lg">Schedule a live demo of our products to understand how they can help you take your company to the next level.</p>
                    <h5 class="mb-3 text-xl font-semibold">What can you anticipate from this demo?</h5>
                    <ul class="list-disc pl-5 space-y-2">
                        <li class="flex items-center"><i class="bi bi-lightbulb mr-2"></i>A customised tour of the UGO Smart Metering platform.</li>
                        <li class="flex items-center"><i class="bi bi-lightbulb mr-2"></i>A one-on-one consultation with one of our platform experts.</li>
                        <li class="flex items-center"><i class="bi bi-lightbulb mr-2"></i>Determine how the platform will integrate within your business.</li>
                    </ul>
                </div>
            </div>
            <div class="lg:w-1/2 mb-4 mt-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <form method="post" action="">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 required">Full Name</label>
                            <input type="text" required class="form-control form-control-lg w-full mt-1 p-3 border border-gray-300 rounded-md" placeholder="Enter your name" name="fullname">
                        </div>
                        <div class="flex flex-col md:flex-row md:space-x-4">
                            <div class="mb-4 md:mb-0 md:w-1/2">
                                <label class="block text-sm font-medium text-gray-700 required">Email</label>
                                <input type="email" required class="form-control form-control-lg w-full mt-1 p-3 border border-gray-300 rounded-md" placeholder="Enter your email" name="emailId">
                            </div>
                            <div class="mb-4 md:mb-0 md:w-1/2">
                                <label class="block text-sm font-medium text-gray-700 required">Phone No.</label>
                                <input type="text" required class="form-control form-control-lg w-full mt-1 p-3 border border-gray-300 rounded-md" placeholder="Enter your phone" name="phoneno" maxlength="10">
                                <input type="email" name="pincode" value="" placeholder="Leave me blank!" class="hidden">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 required">Choose Products</label>
                            <select required class="form-control form-control-lg w-full mt-1 p-3 border border-gray-300 rounded-md" name="ProductType">
                                <option value="">Select any product</option>
                                <optgroup label="Smart Metering Solutions">
                                    <option value="Head End System">Head End System</option>
                                    <option value="Meter Data Management">Meter Data Management</option>
                                    <option value="Consumer Survey & Meter Installation">Consumer Survey & Meter Installation</option>
                                    <option value="Smart Prepaid System">Smart Prepaid System</option>
                                    <option value="Energy Analytics">Energy Analytics</option>
                                </optgroup>
                                <optgroup label="Revenue Management System">
                                    <option value="Unified Billing System">Unified Billing System</option>
                                    <option value="CRM">CRM</option>
                                    <option value="Workforce Management">Workforce Management</option>
                                    <option value="Spot Billing App">Spot Billing App</option>
                                    <option value="Consumer App and Portal">Consumer App and Portal</option>
                                    <option value="Energy Analytics">Energy Analytics</option>
                                    <option value="Network Indexing Management">Network Indexing Management</option>
                                    <option value="OCR Based Billing">OCR Based Billing</option>
                                </optgroup>
                                <optgroup label="Enterprise Resource Planning">
                                    <option value="Procurement">Procurement</option>
                                    <option value="Finance & Accounting">Finance & Accounting</option>
                                    <option value="HRMS">HRMS</option>
                                    <option value="Order & Manufacturing">Order & Manufacturing</option>
                                    <option value="Supply Chain Management">Supply Chain Management</option>
                                    <option value="CRM">CRM</option>
                                    <option value="Inventory Management">Inventory Management</option>
                                    <option value="Workhouse Management">Workhouse Management</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 required">Message</label>
                            <textarea required class="form-control form-control-lg w-full mt-1 p-3 border border-gray-300 rounded-md" name="message" placeholder="Message type here"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="g-recaptcha" data-sitekey="6Lcca-UUAAAAABlDaVLSQ5bOm3nbSUZh5jVqy0XS"></div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-main btn-lg w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-colors">
                            Submit <i class="bi bi-arrow-right ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection