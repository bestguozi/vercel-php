import{a as x}from"./axios-Bo0ATomq.js";import{r,o as y,a,b as l,c as _,d as s,w as t,F as h,e as w,f as e,u as v,g as b,h as k,t as B}from"./index-P32P-s7l.js";const C="/assets/home-CU7bXhWN.png",j="/assets/literacy-r8476KrD.png",N="/assets/math-Drye8lf8.png",X="/assets/video-BE9XgSXg.png",D="/assets/game-ISvEOX6i.png",E=e("div",{style:{height:"400px",width:"100%"}},[e("img",{src:C,width:"100%",height:"100%"})],-1),L=e("div",{style:{display:"flex",border:"solid 1px #fcd3d3",height:"100px",width:"100%","justify-content":"center","align-items":"center"}},[e("img",{src:j,width:"100%",height:"100%"})],-1),S=e("div",{style:{display:"flex",border:"solid 1px #fcd3d3",height:"100px",width:"100%","justify-content":"center","align-items":"center"}},[e("img",{src:N,width:"100%",height:"100%"})],-1),V=e("div",{style:{display:"flex",border:"solid 1px #fcd3d3",height:"100px",width:"100%","justify-content":"center","align-items":"center"}},[e("img",{src:X,width:"100%",height:"100%"})],-1),F=e("div",{style:{display:"flex",border:"solid 1px #fcd3d3",height:"100px",width:"100%","justify-content":"center","align-items":"center"}},[e("img",{src:D,width:"100%",height:"100%"})],-1),R=e("div",{style:{color:"#c45656","margin-top":"10px"}},[e("h3",null,"最新课程")],-1),H={class:"clearfix"},W={__name:"Home",setup(I){const p=v();b(),r("");const c=r([]);function u(){x({method:"get",url:"/api/lesson/index"}).then(function(o){console.log(o.data),c.value=o.data.data}).catch(function(o){console.log(o)})}y(()=>{u()});function g(o){console.log(o),p.push({name:"lesson",params:{id:o}})}return(o,K)=>{const n=a("el-col"),i=a("el-row"),f=a("el-card");return l(),_(h,null,[s(i,null,{default:t(()=>[s(n,{span:24},{default:t(()=>[E]),_:1})]),_:1}),s(i,{gutter:3},{default:t(()=>[s(n,{span:6},{default:t(()=>[L]),_:1}),s(n,{span:6},{default:t(()=>[S]),_:1}),s(n,{span:6},{default:t(()=>[V]),_:1}),s(n,{span:6},{default:t(()=>[F]),_:1})]),_:1}),s(i,null,{default:t(()=>[R]),_:1}),s(i,null,{default:t(()=>[(l(!0),_(h,null,w(c.value,(d,m)=>(l(),k(n,{span:24,key:m},{default:t(()=>[s(f,{shadow:"hover",onClick:M=>g(d.id),style:{margin:"4px"}},{default:t(()=>[e("div",H,[e("span",null,B(d.lesson_name),1)])]),_:2},1032,["onClick"])]),_:2},1024))),128))]),_:1})],64)}}};export{W as default};
