<template>
  <Head title="Mileages" />

  <AuthenticatedLayout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      <form
        @submit.prevent="
          form.post(route('mileages.store'), { onSuccess: () => form.reset() })
        "
      >
        <input type="hidden" v-model="form.date" />
        <input type="hidden" v-model="form.mileage" />
        <input type="hidden" v-model="form.partner_id" />
        <input type="hidden" v-model="form.location_id_start" />
        <input type="hidden" v-model="form.location_id_end" />
       
        <textarea
          v-model="form.comments"
          placeholder="What's on your mind?"
          class="
            block
            w-full
            border-gray-300
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            rounded-md
            shadow-sm
          "
        ></textarea>
        <!-- <InputError :message="form.errors.message" class="mt-2" />  ambiguous naming -->
        <PrimaryButton class="mt-4">Save</PrimaryButton>
      </form>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';

const form = useForm({
  date: '2023-02-13',
  mileage: '45608',
  partner_id: '1',
  location_id_start: '1',
  location_id_end: '1',
  is_personal: true,
  comments: 'initial odometer status',
});
</script>