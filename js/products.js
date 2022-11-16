/*js for change content on click for 10 products*/

//product 1
const cng_content = document.querySelector("#cng_content");
const cng_content1 = document.querySelector("#cng_content2");
const cng_content2 = document.querySelector("#cng_content3");
const pc = document.querySelector("#primary_content1");
const secondry_content = document.querySelector("#secondry_content");
const secondry_content1 = document.querySelector("#secondry_content1");
const secondry_content2 = document.querySelector("#secondry_content2");

//defining function for change content
cng_content.addEventListener("click", () => {
  primary_content.style.display = "none";
  secondry_content.style.display = "flex";
  secondry_content1.style.display = "none";
  secondry_content2.style.display = "none";
});
cng_content1.addEventListener("click", () => {
  primary_content.style.display = "none";
  secondry_content.style.display = "none";
  secondry_content1.style.display = "flex";
  secondry_content2.style.display = "none";
});
cng_content2.addEventListener("click", () => {
  primary_content.style.display = "none";
  secondry_content.style.display = "none";
  secondry_content1.style.display = "none";
  secondry_content2.style.display = "flex";
});

//product 2
const p2_dataChange = document.querySelector("#cng_content");
const p2_dataChange1 = document.querySelector("#cng_content2");
const p2_dataChange2 = document.querySelector("#cng_content3");
const p2_dataChange3 = document.querySelector("#cng_content4");

const p2_primary_content = document.querySelector("#primary_content1");
const p2_secondry_content = document.querySelector("#secondry_content");
const p2_secondry_content1 = document.querySelector("#secondry_content1");
const p2_secondry_content2 = document.querySelector("#secondry_content2");
const p2_secondry_content3 = document.querySelector("#secondry_content3");

//defining function for change content
p2_dataChange.addEventListener("click", () => {
  console.log("dasadfdsf");
  p2_primary_content.style.display = "none";
  p2_secondry_content.style.display = "flex";
  p2_secondry_content1.style.display = "none";
  p2_secondry_content2.style.display = "none";
});
p2_dataChange1.addEventListener("click", () => {
  p2_primary_content.style.display = "none";
  p2_secondry_content.style.display = "none";
  p2_secondry_content1.style.display = "flex";
  p2_secondry_content2.style.display = "none";
});
p2_dataChange2.addEventListener("click", () => {
  p2_primary_content.style.display = "none";
  p2_secondry_content.style.display = "none";
  p2_secondry_content1.style.display = "none";
  p2_secondry_content2.style.display = "flex";
});
p2_dataChange3.addEventListener("click", () => {
  p2_primary_content.style.display = "none";
  p2_secondry_content.style.display = "none";
  p2_secondry_content1.style.display = "none";
  p2_secondry_content2.style.display = "none";
  p2_secondry_content3.style.display = "flex";
});

//product 3
const p3_dataChange = document.querySelector("#cng_content");
const p3_dataChange1 = document.querySelector("#cng_content2");
const p3_dataChange2 = document.querySelector("#cng_content3");
const p3_dataChange3 = document.querySelector("#cng_content4");
const p3_dataChange4 = document.querySelector("#cng_content5");

const p3_primary_content = document.querySelector("#primary_content1");
const p3_secondry_content = document.querySelector("#secondry_content");
const p3_secondry_content1 = document.querySelector("#secondry_content1");
const p3_secondry_content2 = document.querySelector("#secondry_content2");
const p3_secondry_content3 = document.querySelector("#secondry_content3");
const p3_secondry_content4 = document.querySelector("#secondry_content4");

//defining function for change content
p3_dataChange.addEventListener("click", () => {
  console.log("clicked");
  p3_primary_content.style.display = "none";
  p3_primary_content.style.background = "red";
  p3_secondry_content.style.display = "flex";
  p3_secondry_content1.style.display = "none";
  p3_secondry_content2.style.display = "none";
});
p3_dataChange1.addEventListener("click", () => {
  console.log("clicked");
  p3_primary_content.style.display = "none";
  p3_secondry_content.style.display = "none";
  p3_secondry_content1.style.display = "flex";
  p3_secondry_content2.style.display = "none";
});
p3_dataChange2.addEventListener("click", () => {
  console.log("clicked");
  p3_primary_content.style.display = "none";
  p3_secondry_content.style.display = "none";
  p3_secondry_content1.style.display = "none";
  p3_secondry_content2.style.display = "flex";
});
p3_dataChange3.addEventListener("click", () => {
  console.log("clicked");
  p3_primary_content.style.display = "none";
  p3_secondry_content.style.display = "none";
  p3_secondry_content1.style.display = "none";
  p3_secondry_content2.style.display = "none";
  p3_secondry_content3.style.display = "flex";
});
p3_dataChange4.addEventListener("click", () => {
  console.log("clicked");
  p3_secondry_content4.style.display = "flex";
  p3_primary_content.style.display = "none";
  p3_secondry_content.style.display = "none";
  p3_secondry_content1.style.display = "none";
  p3_secondry_content2.style.display = "none";
  p3_secondry_content3.style.display = "none";
});

//product 4
const p4_cng_content = document.querySelector("#cng_content");
const p4_cng_content1 = document.querySelector("#cng_content2");
const p4_cng_content2 = document.querySelector("#cng_content3");
const p4_cng_content3 = document.querySelector("#cng_content4");

const p4_pcontent = document.querySelector("#primary_content1");
const p4_secondry_content = document.querySelector("#secondry_content");
const p4_secondry_content1 = document.querySelector("#secondry_content1");
const p4_secondry_content2 = document.querySelector("#secondry_content2");
const p4_secondry_content3 = document.querySelector("#secondry_content3");

//defining function for change content
p4_cng_content.addEventListener("click", () => {
  console.log("dasadfdsf");
  p4_pcontent.style.display = "none";
  p4_pcontent.style.background = "red";
  p4_secondry_content.style.display = "flex";
  p4_secondry_content1.style.display = "none";
  p4_secondry_content2.style.display = "none";
});
p4_cng_content1.addEventListener("click", () => {
  p4_pcontent.style.display = "none";
  p4_secondry_content.style.display = "none";
  p4_secondry_content1.style.display = "flex";
  p4_secondry_content2.style.display = "none";
});
p4_cng_content2.addEventListener("click", () => {
  p4_pcontent.style.display = "none";
  p4_secondry_content.style.display = "none";
  p4_secondry_content1.style.display = "none";
  p4_secondry_content2.style.display = "flex";
});
p4_cng_content3.addEventListener("click", () => {
  p4_pcontent.style.display = "none";
  p4_secondry_content.style.display = "none";
  p4_secondry_content1.style.display = "none";
  p4_secondry_content2.style.display = "none";
  p4_secondry_content3.style.display = "flex";
});

//product 5
const p5_cng_content = document.querySelector("#cng_content");
const p5_cng_content1 = document.querySelector("#cng_content2");
const p5_cng_content2 = document.querySelector("#cng_content3");
const p5_cng_content3 = document.querySelector("#cng_content4");

const p5_pcontent = document.querySelector("#primary_content1");
const p5_secondry_content = document.querySelector("#secondry_content");
const p5_secondry_content1 = document.querySelector("#secondry_content1");
const p5_secondry_content2 = document.querySelector("#secondry_content2");
const p5_secondry_content3 = document.querySelector("#secondry_content3");

//defining function for change content
p5_cng_content.addEventListener("click", () => {
  p5_pcontent.style.display = "none";
  p5_secondry_content.style.display = "flex";
  p5_secondry_content1.style.display = "none";
  p5_secondry_content2.style.display = "none";
});
p5_cng_content1.addEventListener("click", () => {
  p5_pcontent.style.display = "none";
  p5_secondry_content.style.display = "none";
  p5_secondry_content1.style.display = "flex";
  p5_secondry_content2.style.display = "none";
});
p5_cng_content2.addEventListener("click", () => {
  p5_pcontent.style.display = "none";
  p5_secondry_content.style.display = "none";
  p5_secondry_content1.style.display = "none";
  p5_secondry_content2.style.display = "flex";
});
cng_content3.addEventListener("click", () => {
  pcontent.style.display = "none";
  secondry_content.style.display = "none";
  secondry_content1.style.display = "none";
  secondry_content2.style.display = "none";
  secondry_content3.style.display = "flex";
});

//product 6

const p6_cng_content = document.querySelector("#cng_content");
const p6_cng_content1 = document.querySelector("#cng_content2");
const p6_cng_content2 = document.querySelector("#cng_content3");
const p6_primary_content = document.querySelector("#primary_content");
const p6_secondry_content = document.querySelector("#secondry_content");
const p6_secondry_content1 = document.querySelector("#secondry_content1");
const p6_secondry_content2 = document.querySelector("#secondry_content2");

//defining function for change content
p6_cng_content.addEventListener("click", () => {
  p6_primary_content.style.display = "none";
  p6_secondry_content.style.display = "flex";
  p6_secondry_content1.style.display = "none";
  p6_secondry_content2.style.display = "none";
});
p6_cng_content1.addEventListener("click", () => {
  p6_primary_content.style.display = "none";
  p6_secondry_content.style.display = "none";
  p6_secondry_content1.style.display = "flex";
  p6_secondry_content2.style.display = "none";
});
p6_cng_content2.addEventListener("click", () => {
  p6_console.log("sgadjhajsd");
  p6_primary_content.style.display = "none";
  p6_secondry_content.style.display = "none";
  p6_secondry_content1.style.display = "none";
  p6_secondry_content2.style.display = "flex";
});

//product 7
const p7_cng_content = document.querySelector("#cng_content");
const p7_cng_content1 = document.querySelector("#cng_content2");
const p7_cng_content2 = document.querySelector("#cng_content3");
const p7_pc = document.querySelector("#primary_content1");
const p7_secondry_content = document.querySelector("#secondry_content");
const p7_secondry_content1 = document.querySelector("#secondry_content1");
const p7_secondry_content2 = document.querySelector("#secondry_content2");

//defining function for change content
p7_cng_content.addEventListener("click", () => {
  p7_primary_content.style.display = "none";
  p7_primary_content.style.background = "red";
  p7_secondry_content.style.display = "flex";
  p7_secondry_content1.style.display = "none";
  p7_secondry_content2.style.display = "none";
});
p7_cng_content1.addEventListener("click", () => {
  p7_primary_content.style.display = "none";
  p7_secondry_content.style.display = "none";
  p7_secondry_content1.style.display = "flex";
  p7_secondry_content2.style.display = "none";
});
p7_cng_content2.addEventListener("click", () => {
  p7_primary_content.style.display = "none";
  p7_secondry_content.style.display = "none";
  p7_secondry_content1.style.display = "none";
  p7_secondry_content2.style.display = "flex";
});

//product 8
const p8_cng_content = document.querySelector("#cng_content");
const p8_cng_content1 = document.querySelector("#cng_content2");
const p8_cng_content2 = document.querySelector("#cng_content3");
const p8_cng_content3 = document.querySelector("#cng_content4");

const p8_pcontent = document.querySelector("#primary_content1");
const p8_secondry_content = document.querySelector("#secondry_content");
const p8_secondry_content1 = document.querySelector("#secondry_content1");
const p8_secondry_content2 = document.querySelector("#secondry_content2");
const p8_secondry_content3 = document.querySelector("#secondry_content3");

//defining function for change content
p8_cng_content.addEventListener("click", () => {
  p8_pcontent.style.display = "none";
  p8_secondry_content.style.display = "flex";
  p8_secondry_content1.style.display = "none";
  p8_secondry_content2.style.display = "none";
});
p8_cng_content1.addEventListener("click", () => {
  p8_pcontent.style.display = "none";
  p8_secondry_content.style.display = "none";
  p8_secondry_content1.style.display = "flex";
  p8_secondry_content2.style.display = "none";
});
p8_cng_content2.addEventListener("click", () => {
  p8_pcontent.style.display = "none";
  p8_secondry_content.style.display = "none";
  p8_secondry_content1.style.display = "none";
  p8_secondry_content2.style.display = "flex";
});
p8_cng_content3.addEventListener("click", () => {
  p8_pcontent.style.display = "none";
  p8_secondry_content.style.display = "none";
  p8_secondry_content1.style.display = "none";
  p8_secondry_content2.style.display = "none";
  p8_secondry_content3.style.display = "flex";
});

//product 9
const p9_cng_content = document.querySelector("#cng_content");
const p9_cng_content1 = document.querySelector("#cng_content2");
const p9_cng_content2 = document.querySelector("#cng_content3");
const p9_primary_content = document.querySelector("#primary_content1");
const p9_secondry_content = document.querySelector("#secondry_content");
const p9_secondry_content1 = document.querySelector("#secondry_content1");
const p9_secondry_content2 = document.querySelector("#secondry_content2");

//defining function for change content
p9_cng_content.addEventListener("click", () => {
  p9_primary_content.style.display = "none";
  p9_secondry_content.style.display = "flex";
  p9_secondry_content1.style.display = "none";
  p9_secondry_content2.style.display = "none";
});
p9_cng_content1.addEventListener("click", () => {
  p9_primary_content.style.display = "none";
  p9_secondry_content.style.display = "none";
  p9_secondry_content1.style.display = "flex";
  p9_secondry_content2.style.display = "none";
});
p9_cng_content2.addEventListener("click", () => {
  p9_primary_content.style.display = "none";
  p9_secondry_content.style.display = "none";
  p9_secondry_content1.style.display = "none";
  p9_secondry_content2.style.display = "flex";
});

//product 10
const p10_cng_content = document.querySelector("#cng_content");
const p10_cng_content1 = document.querySelector("#cng_content2");
const p10_cng_content2 = document.querySelector("#cng_content3");
const p10_primary_content = document.querySelector("#primary_content1");
const p10_secondry_content = document.querySelector("#secondry_content");
const p10_secondry_content1 = document.querySelector("#secondry_content1");
const p10_secondry_content2 = document.querySelector("#secondry_content2");

//defining function for change content
p10_cng_content.addEventListener("click", () => {
  p10_primary_content.style.display = "none";
  p10_secondry_content.style.display = "flex";
  p10_secondry_content1.style.display = "none";
  p10_secondry_content2.style.display = "none";
});
p10_cng_content1.addEventListener("click", () => {
  p10_primary_content.style.display = "none";
  p10_secondry_content.style.display = "none";
  p10_secondry_content1.style.display = "flex";
  p10_secondry_content2.style.display = "none";
});
p10_cng_content2.addEventListener("click", () => {
  p10_primary_content.style.display = "none";
  p10_secondry_content.style.display = "none";
  p10_secondry_content1.style.display = "none";
  p10_secondry_content2.style.display = "flex";
});

