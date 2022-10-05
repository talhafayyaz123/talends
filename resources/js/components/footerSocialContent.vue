<template>
    <div class="wt-jobalerts">
 <div class="wt-tabscontenttitle">
   <h2>Footer Social Menu </h2>
    </div>
        <form method="POST" id="footer_social_content" class="wt-formtheme wt-formprojectinfo wt-formcategory" @submit.prevent="submitForm()">
 <p v-if="errors.length">
    <b>Please correct the following error(s):</b>
    <ul>
      <li class="error" v-for="error in errors" :key="error">{{ error }}</li>
    </ul>
  </p>
    <fieldset class="search-content footer1_menu_list">
          <div class="wt-formtheme wt-userform">
        <div class="form-group">
       <input type="text" class="form-control" v-model='facebook_url' name='facebook_url' placeholder="Facebook Url">
        </div>

        <div class="form-group">
       <input type="text" class="form-control" v-model='linkdin_url' name='linkdin_url' placeholder="Linkdin Url">
        </div>

         <div class="form-group">
       <input type="text" class="form-control" v-model='twitter_url' name='twitter_url' placeholder="Twitter Url">
        </div>


        
         <div class="form-group">
       <input type="text" class="form-control" v-model='instragram_url' name='instragram_url' placeholder="Instragram Url">
        </div>

          <div class="form-group">
       <input type="text" class="form-control" v-model='youtube_url' name='youtube_url' placeholder="Youtube Url">
        </div>

        <div class="form-group">
       <input type="text" class="form-control" v-model='tiktok_url' name='tiktok_url' placeholder="Tiktok Url">
        </div>

    </div>
    </fieldset>

     <div class="wt-updatall la-updateall-holder">
          <i class="ti-announcement"></i>
          <span>Save all the latest changes made by you</span>
           <input type="submit" value="Save" class="wt-btn">
      </div>
        </form>
    </div>
</template>

<script>
export default {
  data () {
    return {
        errors:[],
        facebook_url:'',
        linkdin_url:'',
        twitter_url:'',
        instragram_url:'',
        youtube_url:'',
        tiktok_url:''
    }
  },
  methods: {
    submitForm(){
  
      this.errors = [];
     if (!this.facebook_url) {
        this.errors.push('Facebook Url required.');
      }

       if (!this.linkdin_url) {
        this.errors.push('Linkdin Url required.');
      }

       if (!this.youtube_url) {
        this.errors.push('Youtube Url required.');
      }

       if (!this.twitter_url) {
        this.errors.push('Twitter Url required.');
      }

      
       if (!this.instragram_url) {
        this.errors.push('Instragram Url required.');
      }
      

      if (!this.tiktok_url) {
        this.errors.push('Tiktok Url required.');
      }
      
      
      
  if (this.facebook_url && this.linkdin_url && this.youtube_url &&  this.twitter_url && this.instragram_url && this.tiktok_url )  {

    let self = this;
    axios.post(APP_URL + '/admin/store/footer_social_content',{
        facebook_url:self.facebook_url,
        linkdin_url:self.linkdin_url,
        youtube_url:self.youtube_url,
        twitter_url:self.twitter_url,
        instragram_url:self.instragram_url,
        tiktok_url:self.tiktok_url
    })
    .then(function (response) {
  
    self.showMessage('Footer Social Content Added.');
       window.location.reload();
  
  });

      }
    

}
  },
  created() {
      let self = this;
    axios.get(APP_URL + '/admin/settings/footer/social_content')
    .then(function (response) {
        
     if(response.data.type=='success'){
      
      self.facebook_url=response.data.social_content['banner_description'];
       self.linkdin_url=response.data.social_content['features_text'];
       self.twitter_url=response.data.social_content['project_description'];
       self.instragram_url=response.data.social_content['work_description'];
       self.youtube_url=response.data.social_content['services_description'];
       self.tiktok_url=response.data.social_content['payment_description'];

     }
    });

  },
}
</script>