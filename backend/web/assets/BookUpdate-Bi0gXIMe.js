import{_ as U,k as y,b as n,c as b,d as g,f as l,g as r,F as C,l as h,r as F,u as B,o as P,s as D,m as $,p as S,e as _,h as V,i as I,j as w,q as A,v as R,x as N,y as q}from"./index-DS7EhqvI.js";const z=y({components:{},props:["id"],setup(e){const o=h({formData:{book_name:"",grade_id:"",publish:"",book_image:""},rules:{}}),i=h({token:"",crc32:"",accept:""});F("");const m=q(),k=I(),v=B(),d=()=>{m.proxy.$refs.vForm.validate(a=>{a&&D({url:"/v1/learn/book/update?id="+e.id,method:"put",data:o.formData},function(t){t.code==0&&(s(),k.push("/book")),w(t.message)})})},s=()=>{m.proxy.$refs.vForm.resetFields()},p=(a,t)=>{a.status==200&&a.code==0?o.formData.lesson_image=a.data.image_url:w(a.message)},c=()=>{console.log("handlePictureCardPreview")},f=()=>{console.log("handleRemove")},u=a=>{console.log("beforeAvatarUpload");let t=A();return console.log(t),i.token=t.token,!0};return P(()=>{D({url:"/v1/learn/book/view?id="+e.id,method:"get"},function(a){a.code==0&&(o.formData.book_name=a.data.book_name,o.formData.grade_id=a.data.grade_id,o.formData.book_image=a.data.book_image,o.formData.publish=a.data.publish)})}),{...$(o),submitForm:d,resetForm:s,handleAvatarSuccess:p,handlePictureCardPreview:c,beforeAvatarUpload:u,handleRemove:f,userStore:v,uploadData:i}}}),E=e=>(R("data-v-56bde3ce"),e=e(),N(),e),M=E(()=>_("div",{style:{"border-bottom":"solid 1px #b1b3b8","margin-bottom":"10px","padding-bottom":"10px"}},[_("span",null,"Update Book")],-1)),T=["src"],j={class:"static-content-item"};function G(e,o,i,m,k,v){const d=n("el-input"),s=n("el-form-item"),p=n("Plus"),c=n("el-icon"),f=n("el-upload"),u=n("el-button"),a=n("el-form");return b(),g(C,null,[M,l(a,{model:e.formData,ref:"vForm",rules:e.rules,"label-position":"left","label-width":"150px",size:"default"},{default:r(()=>[l(s,{label:"Book Name",prop:"book_name"},{default:r(()=>[l(d,{modelValue:e.formData.book_name,"onUpdate:modelValue":o[0]||(o[0]=t=>e.formData.book_name=t),type:"text",clearable:""},null,8,["modelValue"])]),_:1}),l(s,{label:"Grade",prop:"grade_id"},{default:r(()=>[l(d,{modelValue:e.formData.grade_id,"onUpdate:modelValue":o[1]||(o[1]=t=>e.formData.grade_id=t),type:"text",clearable:""},null,8,["modelValue"])]),_:1}),l(s,{label:"Publish",prop:"publish"},{default:r(()=>[l(d,{modelValue:e.formData.publish,"onUpdate:modelValue":o[2]||(o[2]=t=>e.formData.publish=t),type:"text",clearable:""},null,8,["modelValue"])]),_:1}),l(s,{label:"Book Image",prop:"book_image"},{default:r(()=>[l(f,{name:"file",action:"http://up-z2.qiniup.com",data:e.uploadData,class:"avatar-uploader","show-file-list":!1,"on-preview":e.handlePictureCardPreview,"on-remove":e.handleRemove,"on-success":e.handleAvatarSuccess,"before-upload":e.beforeAvatarUpload,"list-type":"picture-card"},{default:r(()=>[e.formData.book_image?(b(),g("img",{key:0,src:e.formData.book_image,class:"avatar",width:"148",height:"148"},null,8,T)):(b(),S(c,{key:1,class:"avatar-uploader-icon"},{default:r(()=>[l(p)]),_:1}))]),_:1},8,["data","on-preview","on-remove","on-success","before-upload"])]),_:1}),_("div",j,[l(u,{onClick:e.submitForm},{default:r(()=>[V("Upload")]),_:1},8,["onClick"]),l(u,{onClick:o[3]||(o[3]=t=>e.$router.push({name:"book"}))},{default:r(()=>[V("Back")]),_:1})])]),_:1},8,["model","rules"])],64)}const J=U(z,[["render",G],["__scopeId","data-v-56bde3ce"]]);export{J as default};
