<template>
    <div class="h-screen">

        <body class="overflow-x-hidden antialiased">
            <div>
                <div>
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                        <select id="tabs" name="tabs"
                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            <option selected>Add Blog</option>

                            <option>Active Blogs</option>

                            <option>Inactive Blogs</option>

                            <option>Blog Drafts</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <div class="border-b border-gray-200">
                            <nav class="-mb-px flex" aria-label="Tabs">
                                <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                <button @click="setActiveTab('add')" :class="
                                    this.activeTab == 'add'
                                        ? 'text-indigo-500'
                                        : 'border-transparent text-gray-500'
                                "
                                    class=" hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">Add
                                    Blog</button>

                                <button @click="setActiveTab('active')" :class="
                                    this.activeTab == 'active'
                                        ? 'text-indigo-500'
                                        : 'border-transparent text-gray-500'
                                "
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">Active
                                    Blogs</button>

                                <button @click="setActiveTab('inactive')" :class="
                                    this.activeTab == 'inactive'
                                        ? 'text-indigo-500'
                                        : 'border-transparent text-gray-500'
                                " class="border-transparent text-gray-600 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                    aria-current="page">Inactive Blogs</button>

                                <button @click="setActiveTab('drafts')" :class="
                                    this.activeTab == 'drafts'
                                        ? 'text-indigo-500'
                                        : 'border-transparent text-gray-500'
                                "
                                    class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">Blog
                                    Drafts</button>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>


            <div v-if="activeTab=='add'" class="container p-20">

                <div class="mb-10 relative">
                    <h2 class="text-center text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Add
                        New Blog</h2>
                </div>


                <div>
                    <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                        <input v-model="title" type="text" name="name" id="name"
                            class="capitalize font-bold p-3 block w-full border-2 border-b border-gray-200 bg-white focus:border-indigo-600 focus:ring-0 sm:text-md"
                            placeholder="Write Blog Header">
                    </div>
                </div>


                <div>
                    <div class="mt-5">
                        <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1"
                            role="tabpanel" tabindex="0">
                            <label for="comment" class="sr-only">Comment</label>
                            <div>
                                <textarea v-model="content" rows="15" name="comment" id="comment"
                                    class="font-medium p-5 block w-full rounded-md border-gray-400 border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Write Blog Content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2 flex justify-end">
                    <button @click="draftBlog"
                        class="mr-2 inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save
                        as Draft</button>
                    <button @click="postBlog"
                        class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Post
                        Blog</button>
                </div>

            </div>

            <div v-if="activeTab=='active'" class="container p-5">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Blogs List</h1>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <!-- <button type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                user</button> -->
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date Added
                                                </th>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Blog Title
                                                </th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            <tr v-for="(blog, index) in blogs"  :key="index">
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ formatDate(blog.created_at) }}
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ blog.title }}
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-green-600 hover:text-indigo-900 mr-2">
                                                        <i class="fas fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">
                                                        <i class="fas fa-power-off"></i>
                                                    </a>
                                                    <a href="#" class="text-red-600 hover:text-indigo-900 mr-2">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                
                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </body>
    </div>
</template>

<script>
import Layout from "../../Layouts/DashboardLayout";
import moment from "moment";
import { format } from "path";

const app = document.getElementById("app");
export default {
    name: "BlogsAdmin",
    layout: Layout,
    props: {
        blogs: Array,
    },
    components: {
        // TopBanner,
    },
    watch: {},
    mounted() { },
    computed: {
        userID() {
            return this.pageData.props.user.id
            // return this.$page.props.auth.user.id
        }
    },
    data() {
        return {
            title: null,
            content: null,
            activeTab: 'active',
            pageData: JSON.parse(app.dataset.page),

        };
    },
    methods: {
        formatDate(date){
            return moment(date).format('MMM Do YY');
        },
        setActiveTab(value) {
            // if(value === 'add' ){
            //     this.
            // }else if(value ==='active')
            this.activeTab = value;

        },
        async postBlog() {
            const requestBody = {
                added_by: this.userID,
                title: this.title,
                content: this.content,
                live: true,
                draft: false

            };
            await this.$inertia.post('/dashboard/blog/post', requestBody)
                .then(async (result) => {
                    // console.log(result)
                    await this.$inertia.get('/dashboard/blog/')
                        .then(
                            alert('Blog added Successfully')
                        )

                })
                .catch((error) => {
                    alert('Blog not added Successfully')
                    // console.log(error)
                })
        },
        draftBlog() { }
    }
};
</script>
</script>
