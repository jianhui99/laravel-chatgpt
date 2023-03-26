<template>
    <AuthenticatedLayout>
        <ChatLayout>
            <template #aside>

            </template>
            <div class="w-full flex text-white">

            </div>
            <template #form>
                <section class="px-6 top-0 pt-8">
                    <div class="w-full">
                        <div class="relative flex-1 flex items-center">
                            <input
                                type="text"
                                class="w-full dark:bg-gray-700 text-white rounded-lg"
                                placeholder="Ask Laravel AI"
                                ref="promtInput"
                            />
                        </div>
                    </div>
                </section>
            </template>
        </ChatLayout>
    </AuthenticatedLayout>
</template>

<script setup>
import ChatLayout from '@/Layouts/ChatLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

</script>
