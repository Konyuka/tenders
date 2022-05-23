<template>
    <div class="w-full bg-gray-50">
        <nav class="mb-4 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a
                        href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                    >
                        <svg
                            class="mr-2 w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                            ></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg
                            class="w-6 h-6 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500"
                            >Tenders Page</span
                        >
                    </div>
                </li>
            </ol>
        </nav>

        <div
            class="mx-auto container bg-white dark:bg-gray-800 dark:bg-gray-800 shadow rounded"
        >
            <div
                class="flex flex-col lg:flex-row p-4 lg:p-8 justify-between items-start lg:items-stretch w-full"
            >
                <div
                    class="w-full lg:w-1/3 flex flex-col lg:flex-row items-start lg:items-center"
                >
                    <div class="flex items-center">
                        <a
                            class="text-gray-600 dark:text-gray-400 mx-2 p-2 border-transparent border bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 cursor-pointer rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                            href="javascript: void(0)"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon cursor-pointer icon-tabler icon-tabler-settings"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full lg:w-2/3 flex flex-col lg:flex-row items-start lg:items-center justify-end"
                >
                    <div class="lg:ml-6 flex items-center">
                        <button
                            @click="addTender"
                            class="bg-indigo-600 transition duration-150 ease-in-out focus:outline-none border border-transparent focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-white px-5 h-8 flex items-center text-sm mr-4"
                        >
                            Add Tender
                        </button>
                        <button
                            @click="uploadModal = true"
                            class="bg-indigo-600 transition duration-150 ease-in-out focus:outline-none border border-transparent focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-white px-5 h-8 flex items-center text-sm mr-4"
                        >
                            Upload Tender
                        </button>
                        <button
                            @click="refresh"
                            class="bg-indigo-600 transition duration-150 ease-in-out focus:outline-none border border-transparent focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-white px-5 h-8 flex items-center text-sm"
                        >
                            Refresh Tenders
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-x-hidden xl:overflow-x-hidden">
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 border-gray-300 border-b py-8">
                            <th
                                class="pl-8 text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                <!-- <input type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white dark:bg-gray-800 outline-none" onclick="checkAll(this)" /> -->
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                <div
                                    class="text-gray-600 dark:text-gray-400 opacity-0 cursor-default relative w-10"
                                >
                                    <div
                                        class="absolute top-0 right-0 w-5 h-5 mr-2 -mt-1 rounded-full bg-indigo-700 text-white flex justify-center items-center text-xs"
                                    >
                                        3
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file"
                                        width="28"
                                        height="28"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
                                        />
                                    </svg>
                                </div>
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Tender Number
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Purchasing Authority
                            </th>
                            <!-- <th class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4">Tender Brief</th> -->
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Posted Date
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Expiry Date
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                <div
                                    class="opacity-0 w-2 h-2 rounded-full bg-indigo-400"
                                ></div>
                            </th>
                            <td
                                class="text-gray-600 dark:text-gray-400 font-normal pr-8 text-left text-sm tracking-normal leading-4"
                            >
                                Actions
                            </td>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr
                            v-for="post in this.$parent.posts"
                            :key="post._id"
                            class="h-24 border-gray-300 border-b"
                        >
                            <td
                                class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                <!-- <input type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white dark:bg-gray-800 outline-none" onclick="tableInteract(this)" /> -->
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                <div
                                    class="relative w-10 text-gray-600 dark:text-gray-400"
                                >
                                    <!-- <div class="absolute top-0 right-0 w-4 h-4 mr-2 -mt-1 rounded-full bg-green-600 text-white flex justify-center items-center text-xs"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    </svg> -->
                                    <i class="fas fa-caret-right"></i>
                                </div>
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ post.tender_number }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ post.purchasing_authority }}
                            </td>
                            <!-- <td class="pr-6 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <p class="ml-2 text-gray-800 dark:text-gray-100 tracking-normal leading-4 text-sm">{{post.tender_brief}}</p>
                                </div>
                            </td> -->
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ formatDate(post.created_at) }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ formatDate(post.expiry) }}
                            </td>
                            <td class="pr-6">
                                <div
                                    class="w-2 h-2 rounded-full bg-green-500"
                                ></div>
                            </td>
                            <td class="pr-8 relative">
                                <!-- <div class="dropdown-content mt-8 absolute left-0 -ml-12 shadow-md z-10 w-32">
                                    <ul class="bg-white dark:bg-gray-800 shadow rounded py-1">
                                        <li class="cursor-pointer text-gray-600 dark:text-gray-400 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Edit</li>
                                        <li class="cursor-pointer text-gray-600 dark:text-gray-400 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Archive</li>
                                        <li class="cursor-pointer text-gray-600 dark:text-gray-400 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Delete</li>
                                    </ul>
                                </div> -->

                                <!-- <button class="mr-2 text-orange-400 hover:text-orange-300 rounded cursor-pointer border border-transparent focus:outline-none">
                                    <i class="fas fa-eye"></i>
                                </button> -->

                                <button
                                    @click="editPost(post._id)"
                                    class="mr-2 text-indigo-600 hover:text-indigo-400 rounded cursor-pointer border border-transparent focus:outline-none"
                                >
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button
                                    @click="deleteConfirm(post._id)"
                                    class="mr-2 text-red-600 hover:text-red-400 rounded cursor-pointer border border-transparent focus:outline-none"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div
            v-if="addModal"
            id="defaultModal"
            tabindex="-1"
            aria-hidden="true"
            class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full"
        >
            <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
                <!-- Modal content -->
                <div
                    class="relative bg-gray-50 rounded-lg shadow-2xl dark:bg-gray-700"
                >
                    <form @submit.prevent="submit">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600"
                        >
                            <h3
                                class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white"
                            >
                                Add Tender
                            </h3>
                            <button
                                @click="addModal = false"
                                type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="defaultModal"
                            >
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-2 space-y-6">
                            <section
                                class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800"
                            >
                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-3"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Purchasing Authority</label
                                        >
                                        <input
                                            v-model="form.purchasing_authority"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Tender Number</label
                                        >
                                        <input
                                            v-model="form.tender_number"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Competition Type</label
                                        >
                                        <input
                                            v-model="form.competition_type"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Tender Brief</label
                                        >
                                        <textarea
                                            cols="2"
                                            v-model="form.tender_brief"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Work Details</label
                                        >
                                        <textarea
                                            cols="4"
                                            v-model="form.work_detail"
                                            id="username"
                                            type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-3"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Funded By</label
                                        >
                                        <input
                                            v-model="form.funded_by"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Country/Region</label
                                        >
                                        <input
                                            v-model="form.country"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="emailAddress"
                                            >Expiry Date</label
                                        >
                                        <vc-date-picker v-model="date">
                                            <template
                                                v-slot="{
                                                    inputValue,
                                                    inputEvents
                                                }"
                                            >
                                                <input
                                                    :value="inputValue"
                                                    v-on="inputEvents"
                                                    id="emailAddress"
                                                    type="text"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                                />
                                            </template>
                                        </vc-date-picker>
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-3"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Physical Address</label
                                        >
                                        <input
                                            v-model="form.address"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Contact Emails</label
                                        >
                                        <input
                                            v-model="form.email"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Contact Numbers</label
                                        >
                                        <input
                                            v-model="form.phone"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Document Links</label
                                        >
                                        <input
                                            v-model="form.link"
                                            id="username"
                                            type="text"
                                            class="capitalize block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                    <!-- <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Tender Files</label>
                                    <input id="username" type="file" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">PDF / JPEG / PNG / Excel / Doc</div>
                                </div> -->
                                </div>
                            </section>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
                        >
                            <button
                                v-if="modalMode == 'add'"
                                data-modal-toggle="defaultModal"
                                type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Add Tender
                            </button>
                            <button
                                v-if="modalMode == 'edit'"
                                @click="updatePost(postEditId)"
                                data-modal-toggle="defaultModal"
                                type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Update Tender
                            </button>
                            <button
                                data-modal-toggle="defaultModal"
                                type="button"
                                class="text-white bg-orange-400 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-300 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            >
                                Archive Tender
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div
            v-if="deletePost"
            id="popup-modal"
            tabindex="-1"
            class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex z-50 w-full md:inset-0 h-modal md:h-full"
        >
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div
                    class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                >
                    <!-- Modal header -->
                    <div class="flex justify-end p-2">
                        <!-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button> -->
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 pt-0 text-center">
                        <svg
                            class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            ></path>
                        </svg>
                        <h3
                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
                        >
                            Are you sure you want to delete this product?
                        </h3>
                        <button
                            @click="deletePostMethod(postDeleteId)"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Yes, I'm sure
                        </button>
                        <button
                            @click="deletePost = false"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                        >
                            No, cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="uploadModal"
            id="defaultModal"
            tabindex="-1"
            aria-hidden="true"
            class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full"
        >
            <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
                <!-- Modal content -->
                <div
                    class="relative bg-gray-50 rounded-lg shadow-2xl dark:bg-gray-700"
                >
                    <form
                        @submit.prevent="upload"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600"
                        >
                            <h3
                                class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white"
                            >
                                Upload Tender
                            </h3>
                            <button
                                @click="uploadModal = false"
                                type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="defaultModal"
                            >
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-2 space-y-6">
                            <div class="space-y-8  sm:space-y-5">
                                <div>
                                    <div
                                        class="mt-6 sm:mt-5 space-y-6 sm:space-y-5"
                                    >
                                        <div
                                            class="sm:grid sm:grid-cols-4 sm:gap-1 sm:items-start sm:pt-5"
                                        >
                                            <label
                                                for="cover-photo"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
                                            ></label>
                                            <div
                                                class="mt-1 sm:mt-0 sm:col-span-2"
                                            >
                                                <div
                                                    class="max-w-lg flex justify-around px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                                                >
                                                    <div
                                                        class="space-y-1 text-center"
                                                    >
                                                        <span class="m-5">
                                                            <i
                                                                class="fas fa-file-csv fa-2xl text-gray-400"
                                                            >
                                                            </i>
                                                        </span>

                                                        <div
                                                            class="flex justify-center text-sm text-gray-600"
                                                        >
                                                            <label
                                                                for="customFile"
                                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                                                            >
                                                                <span
                                                                    class="font-bold text-lg text-center"
                                                                    >Select
                                                                    File</span
                                                                >
                                                            </label>
                                                            <input
                                                                v-on:change="
                                                                    onFileChange
                                                                "
                                                                name="file"
                                                                id="customFile"
                                                                type="file"
                                                                class="sr-only"
                                                            />
                                                            <!-- <p class="pl-1">or drag and drop</p> -->
                                                        </div>
                                                        <p
                                                            class="text-xs text-gray-500"
                                                        >
                                                            XLSX or CSV up to
                                                            10MB
                                                        </p>
                                                        <p
                                                            class="text-xs text-gray-500"
                                                        >
                                                            Selected File:
                                                            <span
                                                                class="text-indigo-700 font-bold"
                                                            >
                                                                {{ filename }}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="pt-5">
                        <div class="flex justify-end">
                        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        </div>
                    </div> -->
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex justify-between items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
                        >
                            <a :href="route('download')">
                                <button
                                    data-modal-toggle="defaultModal"
                                    type="button"
                                    class="text-black bg-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-300 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                >
                                    Download Template
                                </button>
                            </a>
                            <button
                                data-modal-toggle="defaultModal"
                                type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Upload Tender
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import { Calendar, DatePicker } from 'v-calendar';
import Vue from "vue";
import VCalendar from "v-calendar";
import moment from "moment";

const { default: axios } = require("axios");

Vue.use(VCalendar, {
    componentPrefix: "vc" // Use <vc-calendar /> instead of <v-calendar />
});

export default {
    name: "TendersPage",
    components: {
        //   Calendar,
        //   DatePicker,
    },
    data() {
        return {
            filename: "",
            file: "",
            uploadModal: false,
            date: new Date(),
            temp: 0,
            addModal: false,
            modalMode: "add",
            form: {
                purchasing_authority: null,
                tender_number: null,
                tender_brief: null,
                competition_type: null,
                category: null,
                funded_by: null,
                country: null,
                work_detail: null,
                expiry: null,
                address: null,
                email: null,
                phone: null,
                link: null,
                userID: null
            },
            deletePost: false,
            postDeleteId: "",
            postEditId: ""
        };
    },
    mounted() {
        // this.UserId = this.$parent.pageData.props.user.id
        // this.UserId = parseInt(this.$parent.pageData.props.user.id)
    },
    computed: {
        // posts(){
        //     return this.$parent.pageData.props.allPosts
        // }
    },
    methods: {
        refresh() {
            axios
                .get(
                    "https://www.biddetail.com/kenya/C62A8CB5DD405E768CAD792637AC0446/F4454993C1DE1AB1948A9D33364FA9CC"
                )
                .then(response => {
                    // console.log(response.data.TenderDetails[0].TenderLists);
                    // const data = response.data.TenderDetails[0].TenderLists;
                    const payload = {
                        tenders: response.data.TenderDetails[0].TenderLists
                    };
                    this.$inertia.post("refresh", payload);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        upload(e) {
            // e.preventDefault();
            // let currentObj = this;
            // const config = {
            // headers: {
            // 'content-type': 'multipart/form-data',
            // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            // }
            // }
            if (this.filename.length !== 0) {
                let formData = new FormData();
                formData.append("file", this.file);
                // this.$inertia.post('/import', formData, config)
                this.$inertia
                    .post("/import", formData)
                    .then(function(response) {
                        currentObj.success = response.data.success;
                        currentObj.filename = "";
                    })
                    .catch(function(error) {
                        currentObj.output = error;
                    });
            } else {
                alert("No file was Selected");
            }
        },
        onFileChange(e) {
            //console.log(e.target.files[0]);
            this.filename = e.target.files[0].name;
            this.file = e.target.files[0];
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        updatePost(value) {
            this.form.expiry = this.date;
            let today = new Date();
            if (this.form.expiry > today) {
                // this.$inertia.post('/post', this.form)
                this.$inertia.put(`/update/${value}`, this.form);
            } else {
                alert("Check Expiry Date");
            }
        },
        editPost(value) {
            // this.$parent.posts
            // this.form.put(route("posts.update", this.post.id));
            let editedPost = this.$parent.posts.find(d => d._id === value);
            this.form = editedPost;
            this.modalMode = "edit";
            this.postEditId = value;
            this.addModal = true;
            // console.log(editedPost)
        },
        deleteConfirm(value) {
            this.postDeleteId = value;
            this.deletePost = true;
        },
        // deleteUser() {
        //     if (confirm('Are you sure you want to delete this contact?')) {
        //         this.$inertia.delete(`/destroy/${this.users.id}`)
        //         .then(() => {
        //         })
        //     }
        // },
        deletePostMethod(value) {
            // console.log(value)
            this.$inertia.delete(`/delete/${value}`).then(() => {
                // alert('deleted')
            });
        },
        addTender() {
            this.form.UserID = parseInt(this.$parent.pageData.props.user.id);
            this.addModal = true;
        },
        submit() {
            this.form.expiry = this.date;
            let today = new Date();
            if (this.form.expiry > today) {
                this.$inertia.post("/post", this.form);
            } else {
                alert("Check Expiry Date");
            }
        },
        dropdownFunction(event) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            let list = event.currentTarget.parentElement.parentElement.getElementsByClassName(
                "dropdown-content"
            )[0];
            for (i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.add("hidden");
            }
            list.classList.toggle("hidden");
        },
        documentClick(event) {
            if (!event.target.matches(".dropbtn")) {
                var dropdowns = document.getElementsByClassName(
                    "dropdown-content"
                );
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    openDropdown.classList.add("hidden");
                }
            }
        },
        checkAll(event) {
            let rows =
                event.currentTarget.parentElement.parentElement.parentElement
                    .nextElementSibling.children;
            for (var i = 0; i < rows.length; i++) {
                if (event.currentTarget.checked) {
                    rows[i].classList.add("bg-gray-100");
                    let checkbox = rows[i].getElementsByTagName("input")[0];
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                } else {
                    rows[i].classList.remove("bg-gray-100");
                    let checkbox = rows[i].getElementsByTagName("input")[0];
                    if (checkbox) {
                        checkbox.checked = false;
                    }
                }
            }
        },
        tableInteract(event) {
            var single = event.currentTarget.parentElement.parentElement;
            single.classList.toggle("bg-gray-100");
        },
        pageView(val) {
            let text = document.getElementById("page-view");
            if (val) {
                if (this.$data.temp === 2) {
                    this.$data.temp = 0;
                } else {
                    this.$data.temp = this.$data.temp + 1;
                }
            } else if (this.$data.temp !== 0) {
                this.$data.temp = this.$data.temp - 1;
            }
            switch (this.$data.temp) {
                case 0:
                    text.innerHTML = "Viewing 1 - 20 of 60";
                    break;
                case 1:
                    text.innerHTML = "Viewing 21 - 40 of 60";
                    break;
                case 2:
                    text.innerHTML = "Viewing 41 - 60 of 60";
            }
        }
    },
    created() {
        document.addEventListener("click", this.documentClick);
    },
    unmounted() {
        document.removeEventListener("click", this.documentClick);
    }
};
</script>
