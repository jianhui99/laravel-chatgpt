<template>
    <Head :title="title" />
    <ChatLayout>
        <template #aside>
            <ul class="p-2">
                <li
                    v-if="chat"
                    class="px-4 py-2 my-2 flex justify-between font-semibold text-green-400 bg-slate-900 hover:bg-slate-700 rounded-lg duration-200"
                >
                    <Link href="/chat" class="w-full">New Chat</Link>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4.5v15m7.5-7.5h-15"
                        />
                    </svg>
                </li>
            </ul>
        </template>
        <template #form>
            <section class="px-6 top-0">
                <div class="w-full">
                    <div class="relative flex-1 flex items-center">
                        <!-- <input
                            type="text"
                            class="w-full bg-slate-700 text-white rounded-lg"
                            placeholder="Ask Laravel AI"
                            ref="promtInput"
                        /> -->
                        <textarea
                        type="text"
                            class="w-full bg-slate-700 text-white rounded-lg border-none resize-none outline-none"
                            placeholder="Ask Laravel AI"
                            ref="promtInput"
                            @input="handleInput"
                            v-model="form.promt"
                            @keyup.enter="submit"
                            rows="1"
                        ></textarea>
                        
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pl-3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6 -ml-8 text-slate-200"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </template>
    </ChatLayout>
</template>

<script setup>
import ChatLayout from '@/Layouts/ChatLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    promt: "",
});

const submit = () => {
    form.post(route('chat.store'));
};


const handleInput = (e) => {
    const textarea = e.target;
    textarea.style.height = 'auto';
    textarea.style.height = `${textarea.scrollHeight}px`;
}

</script>
