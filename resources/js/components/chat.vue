<template>
<div class="wt-chatpopup">
    <div class="wt-chatbox">
            <div id="wt-verticalscrollbarpop" class="wt-chatboxpop wt-verticalscrollbarpop wt-dashboardscrollbar">
                <div class="wt-messages">
                    <div v-for="(msg, index) in messages" :key="index" v-bind:class="[msg.type===1 || msg.user_id == receiver ? 'wt-offerermessage' : 'wt-memessage wt-readmessage']">
                        <figure v-if="image">
                            <img v-if="msg.type===1" :src="msg.by" :alt="image_name">
                            <img v-else :src="msg.image" :alt="image_name">
                        </figure>
                        <div class="wt-description">
                            <p>{{ msg.message }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wt-replaybox">
                <div class="form-group">
                    <textarea class="form-control" name="reply" :placeholder="ph_new_msg" v-model="newmessage"></textarea>
                </div>
                <div class="wt-iconbox">
                    <a href="javascript:void(0);" @click="sendMessage" class="wt-btnsendmsg">{{ trans('lang.btn_send') }}</a>
                </div>
            </div>
        </div>
        <a id="wt-getsupport" class="wt-themeimgborder"><img :src="this.receiver_profile_image" :alt="trans_image_alt"></a>
</div>
</template>
<script>
export default {
    props: ['receiver_id', 'receiver_profile_image', 'trans_image_alt', 'ph_new_msg'],
    data() {
        return {
            user: Laravel.user.name,
            image:Laravel.user.image,
            image_name:Laravel.user.image_name,
            newmessage: '',
            messages: [],
            receiver: this.receiver_id,
            
        }
    },
    methods: {
        sendMessage(e) {
            e.preventDefault();
            var self = this;
            self.messages.push({ message: self.newmessage, image: self.image, type: 0, by: 'Me' })
            jQuery('#wt-verticalscrollbarpop').mCustomScrollbar('scrollTo','bottom');
            axios.post(APP_URL + '/message/send-private-message',{
                author_id : Laravel.user.id,
                receiver_id: self.receiver,
                message: self.newmessage,
                status: 0
            })
            .then(function (response) {
            })
            .catch(function (error) {});

            self.newmessage = null
        },
        startChat (id) {
                let self = this;
                axios.post(APP_URL + '/message-center/get-messages',{
                    sender_id : id,
                    type : 'popup'
                })
                .then(function (response) {
                    if (response.data.messages) {
                        self.messages = response.data.messages;
                    }
                });
                // self.messages = [];
        },
    },
    created () {
        this.startChat(this.receiver)
    }
}
</script>