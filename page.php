@import "tailwindcss";
@source "../index.php";

/* ─── Theme tokens ─────────────────────────────────────────────────────────── */
@theme inline {
--color-primary: var(--site-color-primary);
--color-secondary: var(--site-color-secondary);
--color-text_color: var(--site-color-text);
--color-dim_bg: var(--site-color-dim-bg);
--font-mulish: var(--site-font-mulish);
--font-playfair: var(--site-font-playfair);
}

/* ─── CSS custom properties ────────────────────────────────────────────────── */
:root {
--site-color-primary: rgb(30, 95, 145); /* #1e5f91 */
--site-color-secondary: rgb(68, 119, 153); /* #447799 */
--site-color-text: #424242;
--site-color-dim-bg: #f4fbfe;
--site-font-mulish: "Mulish", sans-serif;
--site-font-playfair: "Playfair Display", sans-serif;
/* legacy aliases kept for template compatibility */
--font-exo: var(--site-font-playfair);
--header-height: 60px;
}

/* ─── Utilities ────────────────────────────────────────────────────────────── */
@utility container {
@apply mx-auto max-w-356 px-3.75;
}
@utility container-fluid {
@apply w-full mx-auto max-w-341 px-3.75 max-[1440px]:max-w-full;
}

/* ─── Keyframes (global) ───────────────────────────────────────────────────── */
@keyframes slide-progress {
0% { transform: translateX(-100%); }
100% { transform: translateX(0); }
}
@keyframes pulse-border {
0% { transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1); opacity: 1; }
100% { transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5); opacity: 0; }
}
@keyframes growDown {
0% { transform: scaleY(0); }
100% { transform: scaleY(1); }
}
@keyframes slideDown {
from { transform: translateY(-100%); }
to { transform: translateY(0); }
}
@keyframes spin {
from { transform: rotate(0deg); }
to { transform: rotate(360deg); }
}
@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
@keyframes fadeOut { from { opacity: 1; } to { opacity: 0; } }
@keyframes ripple {
0% { transform: scale(0, 0); opacity: 1; }
50% { transform: scale(25, 25); opacity: 1; }
100% { transform: scale(25, 25); opacity: 0; }
}
@keyframes bounce {
0%, 100% { opacity: 1; }
60% { opacity: 0; }
}

/* ═══════════════════════════════════════════════════════════════════════════ */
/* BASE */
/* ═══════════════════════════════════════════════════════════════════════════ */
@layer base {
html { @apply scroll-smooth; }
body { @apply overflow-x-hidden; }

* {
line-height: 1.7rem;
font-family: var(--font-mulish);
&:focus { outline: none; }
}

div { line-height: 1.7rem; }

textarea:focus,
input:focus { outline: none; }

p {
@apply mb-4 text-base font-normal text-black;
line-height: 1.7rem;
&:last-child { @apply mb-0; }
a { @apply font-bold text-black!; }
}

img { @apply rounded; }

a {
&:active, &:focus { outline: none; }
}

ol {
@apply mb-7;
li { @apply mb-3 list-decimal list-inside pl-[18px] -indent-[18px]; }
}

select {
@apply cursor-pointer rounded appearance-none;
padding: 14px 8px 14px 12px !important;
background-repeat: no-repeat !important;
background-position: right 16px center !important;
background-size: 1em !important;
background-image: url("../images/svg/angle-bottom.svg");
}

table {
@apply w-full! max-w-full mb-4;
tr:first-child td { @apply font-medium text-black; }
tr:nth-child(even) { background: #000; }
tr td { @apply text-black px-2.5 py-2; }
}

iframe { @apply rounded; }

/* Article headings — use --font-exo alias (resolves to Playfair) */
article {
h2 { font-size: 28px; line-height: 34px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h3 { font-size: 23px; line-height: 31px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h4 { font-size: 20px; line-height: 26px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h5 { font-size: 18px; line-height: 23px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h6 { font-size: 16px; line-height: 22px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }

table {
@apply w-full! max-w-full mb-4;
tr:first-child td { @apply font-medium text-black; }
tr:nth-child(even) { background: #000; }
tr td { @apply text-black px-2.5 py-2; }
}

ul {
@apply mb-7;
li {
@apply text-base text-black pl-[30px] relative mb-[15px] leading-[22px];
&::before {
content: url("../images/svg/list-icon.svg");
@apply absolute left-0 top-0.5 w-[22px] h-[22px];
}
}
}

a, li a { @apply font-bold text-black!; }
a:hover, li a:hover { @apply underline; }

figure.image {
@apply relative mb-5;
img { @apply rounded; }
figcaption { @apply text-[13px] text-black; }
}
}
}

/* ═══════════════════════════════════════════════════════════════════════════ */
/* COMPONENTS */
/* ═══════════════════════════════════════════════════════════════════════════ */
@layer components {

/* ── Typography helpers ─────────────────────────────────────────────────── */
.text-white p { color: #fff; }

:is(p, article, blockquote) {
a { color: #000; }
a:hover { @apply underline text-black!; }
}

.space-y-2 a { color: #000; }

article a,
article li a,
blockquote a,
.package-page__main-content .package__itinerary-note a {
@apply font-bold text-black!;
&:hover { @apply underline; }
}

/* ── Layout helpers ─────────────────────────────────────────────────────── */
.common-module {
@apply mb-[30px];
.mb-0 { @apply mb-0!; }
}

.common-box {
@apply py-[70px];
&.pt-0 { @apply pt-0!; }
&.pb-0 { @apply pb-0!; }
&.py-0 { @apply py-0!; }
&[role="main"] {
@apply py-[30px]!;
&.pb-0 { @apply pb-0!; }
&.pt-0 { @apply pt-0!; }
}
}

.section-title-wrap {
@apply mb-[25px];
&.mb-0 { @apply mb-0!; }
}

.page-title {
@apply mb-[30px];
&.mb-0 { @apply mb-0; }
}

.table-responsive { @apply overflow-x-auto w-full mb-5; }

/* ── Gradient / shadow ──────────────────────────────────────────────────── */
.hav-gradient-bg {
background: linear-gradient(180deg, rgba(244,251,254,1) 0%, rgba(255,255,255,1) 100%);
}
/* Note: custom shadow uses brand blue tint #6cafda */
.custom-shadow { box-shadow: 0px 1px 4px 0px rgb(108,175,218); }
.custom-rounded, #sidebar-toc { @apply rounded; }

/* ── Search box ─────────────────────────────────────────────────────────── */
.search-box-elements {
@apply transition-all duration-1000 opacity-100 z-[99];
&.hidden { @apply w-0 opacity-0; }
&:not(.hidden) { @apply absolute -right-[18px] -top-[30px] w-[300px]; }
}

.search-close {
/* white background (differs from doc1 which used black) */
@apply float-right bg-white rounded-full w-7 h-7 text-center mb-2.5 relative z-[1] p-[7px];
.icon-close { @apply relative top-[-1.7px] left-[0.5px]; }
.icon-close:before { @apply text-black; }
}

/* ── Datepicker overrides ───────────────────────────────────────────────── */
.datepicker .grid,
.floating-form .datepicker .grid { @apply gap-0.5! gap-x-0!; }
.datepicker-cell.today:not(.selected) { background-color: #000 !important; color: #fff !important; }
.datepicker-cell, .dow { font-size: 14px !important; }
.datepicker-cell:not(.disabled):hover { background-color: rgba(0,0,0) !important; }
.datepicker-header .datepicker-controls .button { font-size: 15px !important; }

/* ── Fancybox ───────────────────────────────────────────────────────────── */
.fancybox__content { border-radius: 5px !important; img { border-radius: 5px !important; } }

/* ── Grid gap overrides (kept as plain CSS for specificity) ─────────────── */

/* ── line-through decoration ────────────────────────────────────────────── */
.line-through {
@apply no-underline relative px-0.5 inline-block;
&:before {
@apply content-[''] absolute left-0 w-full h-px bg-[#b3b3b3];
top: 50%;
}
&.text-white:before { @apply bg-white; }
&.text-text_color:before { @apply bg-black; }
}

/* ── Swiper ─────────────────────────────────────────────────────────────── */
.swiper-button-disabled { @apply opacity-30; }
.swiper {
@apply p-[2px_1px]!;
.swiper-wrapper { @apply grid max-h-[440px]! gap-[15px]; }
&.swiper-initialized .swiper-wrapper { @apply flex! max-h-full! gap-0!; }
}

/* ── Forms ──────────────────────────────────────────────────────────────── */
.normal-form {
input[type="text"],
input[type="number"],
input[type="email"],
select,
textarea { @apply rounded min-h-[55px] border border-[#dedede] p-2.5!; }
}

form {
input[type="text"].border-none,
input[type="number"].border-none { @apply border-0! py-3 px-2.5! text-center; }
}

.floating-form {
input[type="text"],
input[type="number"],
input[type="email"],
select { @apply bg-white border border-[#dedede] rounded; padding: 20px 10px 5px !important; }

textarea {
@apply bg-white border border-[#dedede];
padding: 30px 10px 5px !important;
&.pt-0 { padding: 5px !important; }
}

.counter-input input,
input[type="text"].date-picker { padding: 12px !important; @apply rounded w-full; }

.counter-input {
input { @apply w-[60px] border-0!; padding: 13px 0 !important; @apply text-center; }
.cursor-pointer.icon-plus,
.cursor-pointer.icon-minus {
@apply bg-black p-[5px] rounded-[3px] transition-all duration-500;
&:hover { @apply bg-black/90; }
}
}
}

.counter-input {
input { @apply w-[60px] border-0!; padding: 13px 0 !important; @apply text-center; }
.cursor-pointer.icon-plus,
.cursor-pointer.icon-minus {
@apply bg-black p-[5px] rounded-[3px] transition-all duration-500;
&:hover { @apply bg-black/90; }
}
}

input[type="file"]::file-selector-button {
@apply border-2 border-black text-white rounded bg-black transition-all duration-1000;
&:hover { background-color: rgba(0,1,0); border-color: rgba(0,1,0); }
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }

textarea.peer:focus ~ .peer-focus\:text-text_color {
transform: none !important;
font-size: 12px !important;
}

/* ── Placeholder image wrapper ──────────────────────────────────────────── */
.placeholder__img-wrapper {
@apply relative w-full;
&::after {
@apply absolute content-[''] inset-0 z-0 rounded;
background-image: url("../images/placeholder-logo.svg");
background-position: 50% 50%;
background-size: auto 20%;
background-repeat: no-repeat;
/* uses secondary color bg instead of black */
background-color: #e1eaf1;
}
.placeholder__img {
@apply absolute top-0 w-full;
video, img { @apply rounded w-full relative z-[1]; }
a { @apply relative z-[1]; }
}
}

/* ── Content image ──────────────────────────────────────────────────────── */
.content-img {
@apply mb-[15px];
.placeholder__img-wrapper { padding-top: calc(450/600*100%); @apply rounded; }
img { @apply object-cover rounded; }
}

/* ── Hover / animation effects ──────────────────────────────────────────── */
.arrow-move-effect {
span[class*="icon-"] { @apply translate-x-0 inline-block transition-transform duration-[400ms] ease-in-out; }
&:hover {
@apply no-underline;
span[class*="icon-"] { @apply translate-x-2.5 transition-all duration-500; }
}
&.bg-secondary-effect:hover .text-text_color { @apply text-white; }
}

.bg-primary-effect {
@apply transition-all duration-500;
&:hover { box-shadow: inset 0 0 0 2em #000; @apply text-white; }
&.hav-icon:hover svg { filter: invert(1) brightness(100); }
}

.bg-secondary-effect {
@apply transition-all duration-500;
&:hover { box-shadow: inset 0 0 0 2em #000; @apply text-white; }
}

.bg-dim_primary-effect {
@apply transition-all duration-500;
&:hover { box-shadow: inset 0 0 0 2em #000; @apply text-white border-black; }
}

.circular-animate {
&:before {
@apply content-[''] absolute z-0 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 block w-[90px] h-[90px] rounded-full;
background: rgba(255,255,255,0.5);
animation: pulse-border 1500ms ease-out infinite;
}
&:after {
@apply content-[''] absolute z-[1] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 block w-[85px] h-[85px] rounded-full transition-all duration-200;
background: rgba(255,255,255,1);
}
}

/* ── Loader / spinner ───────────────────────────────────────────────────── */
.loader {
@apply inline-block;
animation: spin 1300ms infinite linear;
&.hidden { @apply hidden; }
}
.spin {
@apply inline-block;
animation: spin 11000ms infinite linear;
&.hidden { @apply hidden; }
}

/* ── Dot loader ─────────────────────────────────────────────────────────── */
.dot-loader {
@apply flex items-center;
&__item {
@apply w-2.5 h-2.5 bg-black rounded-full mr-[5px];
&.dot-loader__item-0 { animation: bounce 0.8s infinite 0s; }
&.dot-loader__item-1 { animation: bounce 0.8s infinite 0.2s; }
&.dot-loader__item-2 { animation: bounce 0.8s infinite 0.4s; }
}
}

/* ── More/less wrappers ─────────────────────────────────────────────────── */
.more-less-wrapper,
.ajax-more-less-wrapper {
@apply overflow-hidden transition-[height] duration-300 ease-in-out;
&.expanded { height: auto; }
}

/* ── Lazy load ──────────────────────────────────────────────────────────── */
img.lazyload:not([src]) { @apply invisible; }
.lazyload, .lazyloading { @apply opacity-0; }
.lazyloaded { @apply opacity-100 transition-opacity duration-300; }

/* ── Share widget ───────────────────────────────────────────────────────── */
.share-wrap {
@apply relative;
.share-list {
@apply absolute right-0 z-50 w-[145px] border border-[#dbdbdb] bg-white overflow-hidden hidden;
&.show { @apply block; }
&__item {
@apply w-full text-left border-b border-dashed border-[#e0e0e0];
&:last-child { @apply border-b-0; }
}
.share-facebook,
.share-x,
.share-linkedin,
.share-instagram,
.share-whatsapp,
.share-copy { @apply text-black transition-all duration-[400ms]; }
.share-facebook:hover { @apply bg-[#1877f2] text-white!; }
.share-x:hover { @apply bg-black text-white!; }
.share-linkedin:hover { @apply bg-[#0a66c2] text-white!; }
.share-instagram:hover { @apply bg-[#c32aa3] text-white!; }
.share-whatsapp:hover { @apply bg-[#29a71a] text-white!; }
.share-copy:hover { @apply bg-black text-white!; }
}
}

/* ── Link underline animation ───────────────────────────────────────────── */
.link-underline,
.sitemap-page__col ul li a {
@apply inline-block relative;
&:after {
@apply absolute bottom-0 left-1/2 block h-0.5 w-0 bg-white transition-[width,left] duration-300 ease-linear;
content: "";
}
&:hover:after { @apply w-full left-0; }
&.text-secondary:hover:after,
&.text-primary:hover:after,
&.text-text_color:hover:after { @apply -bottom-[5px] bg-black; }
}

/* ── Modal ──────────────────────────────────────────────────────────────── */
.modal-dialog {
@apply fixed inset-0 overflow-x-hidden overflow-y-auto z-[11111] hidden opacity-0;
transition: opacity 1s ease;
animation: fadeOut 1s;
&:target .modal-overlay { @apply fixed inset-0 cursor-pointer z-[1] bg-black/50; }
.modal-dialog {
@apply relative w-[90%] max-w-[660px] max-h-[70%] mx-auto my-[10%] overflow-x-hidden overflow-y-auto z-[2] rounded-md;
box-shadow: 0 11px 15px -7px rgba(0,0,0,.2), 0 24px 38px 3px rgba(0,0,0,.14), 0 9px 46px 8px rgba(0,0,0,.12);
}
.modal-content { @apply rounded; padding: 80px 10px 10px; }
&.is-active { @apply w-full h-full opacity-100 block; transition: opacity 1s ease; animation: fadeIn 1s; }
}
.modal-close {
@apply absolute right-[15px] top-[25px] bg-white/90 rounded-full p-[3px] w-10 h-10 flex justify-center items-center;
}

/* ── Accordion ──────────────────────────────────────────────────────────── */
.accordion__item {
@apply border-b border-[#d9dee0] overflow-hidden;
&:last-child { @apply border-b-0; }
}
.accordion__item-title {
@apply py-[18px] cursor-pointer relative select-none;
&::before, &::after {
@apply content-[''] absolute bg-black transition-all duration-300 ease-in-out;
right: 24px; top: 50%;
}
&::before { @apply w-4 h-0.5 -mt-px; }
&::after { width: 2px; height: 16px; margin-top: -8px; right: 31px; }
&.active::after { @apply opacity-0 translate-y-[25%]; }
}
.accordion__item-content {
@apply max-h-0 overflow-hidden text-[#546e7a];
transition: max-height 300ms ease-in-out, padding 300ms ease-in-out;
}
.accordion__item.open .accordion__item-content { max-height: 5000px; @apply pt-2.5 pb-5; }

/* ── Collapsible ────────────────────────────────────────────────────────── */
.collapsible-content { @apply max-h-0 overflow-hidden transition-[max-height] duration-[400ms] ease-in-out; }
.collapsible.active + .collapsible-content { max-height: 1000px; }

/* ── Popover ────────────────────────────────────────────────────────────── */
.popover-wrap-content { @apply bg-white; }

/* ── Custom radio ───────────────────────────────────────────────────────── */
.custom-radio {
[type="radio"]:checked, [type="radio"]:not(:checked) { @apply absolute left-[-9999px]; }
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label { @apply relative pl-7 cursor-pointer leading-5 inline-block text-[#666]; }
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before { @apply content-[''] absolute left-0 top-0 w-[18px] h-[18px] border border-[#ddd] rounded-full bg-white; }
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after { @apply content-[''] w-3 h-3 bg-black absolute top-[3px] left-[3px] rounded-full transition-all duration-200; }
[type="radio"]:not(:checked) + label:after { @apply opacity-0 scale-0; }
[type="radio"]:checked + label:after { @apply opacity-100 scale-100; }
}

/* ── Custom checkbox ────────────────────────────────────────────────────── */
.custom-checkbox {
input { @apply hidden cursor-pointer; }
label { @apply relative cursor-pointer; }
label:before { @apply content-[''] appearance-none bg-transparent border-2 border-black/[0.99] rounded-[2px] p-[7px] inline-block align-middle cursor-pointer mr-[5px]; }
input:checked + label:after { @apply content-[''] block absolute top-[5px] left-[7px] w-[5px] h-[10px] border-black border-[0_2px_2px_0] rotate-45; }
}

/* ── Button checkbox ────────────────────────────────────────────────────── */
.button-checkbox {
@apply flex flex-wrap gap-2.5;
&__item {
@apply relative inline-flex items-center gap-2 border border-black rounded-[30px] bg-white text-black text-sm cursor-pointer transition-[background-color,color] duration-300;
.button-checkbox__item-title { @apply rounded-[2rem] py-1 px-3; }
input[type="checkbox"] { @apply absolute opacity-0 pointer-events-none; }
input[type="checkbox"]:checked + .button-checkbox__item-title { @apply text-white bg-black; }
}
}

/* ── Scrollbar ──────────────────────────────────────────────────────────── */
:is(.search-suggest, .toc-list-wrapper) {
&::-webkit-scrollbar { width: 6px; height: 6px; }
&::-webkit-scrollbar-track { background: #e4e4e4; border-radius: 50rem; }
&::-webkit-scrollbar-thumb { background: rgba(0,0,0) !important; border-radius: 50rem; }
}

/* ── Social icons ───────────────────────────────────────────────────────── */
.social-common {
@apply rounded-[3px] flex items-center justify-center transition-all duration-[400ms] w-[30px] h-[30px];
&:hover { @apply transition-all duration-[600ms]; }
[class*="icon-"]:before { @apply text-white; }
}
.social-fb { @apply bg-[#3b5998] border border-[#3b5998]; &:hover { @apply bg-transparent; } }
.social-twitter { @apply bg-[#32aaf2] border border-[#32aaf2]; &:hover { @apply bg-transparent; } }
.social-x { @apply bg-black border border-black; &:hover { @apply bg-transparent; } }
.social-insta { @apply bg-[#e65068] border border-[#e65068]; &:hover { @apply bg-transparent; } }
.social-linkedin { @apply bg-[#0a66c2] border border-[#0a66c2]; &:hover { @apply bg-transparent; } }
.social-yt { @apply bg-[#f00] border border-[#f00]; &:hover { @apply bg-transparent; } }
.social-pin { @apply bg-[#bd081c] border border-[#bd081c]; &:hover { @apply bg-transparent; } }
.social-tiktok { @apply bg-black border border-black; &:hover { @apply bg-transparent; } }

/* ── Star rating ────────────────────────────────────────────────────────── */
.star-rating {
.rating-group { @apply inline-flex; }
.rating__icon { @apply pointer-events-none; }
.rating__input { @apply absolute! left-[-9999px]!; }
.rating__input--none { @apply hidden; }
.rating__label { @apply cursor-pointer px-[0.1em] text-[1.6rem]; }
.rating__icon--star:before { color: #ffc20e; }
.rating__input:checked ~ .rating__label .rating__icon--star:before { color: #e8e8e8; }
.rating-group:hover .rating__label .rating__icon--star:before { color: #ffc20e; }
.rating__input:hover ~ .rating__label .rating__icon--star:before { color: #e8e8e8; }
}

/* ── Rating wrap ────────────────────────────────────────────────────────── */
.rating-wrap {
.star {
@apply relative pr-5;
&:before { content: "\e900"; @apply absolute font-['icomoon'] left-0 -top-0.5 w-full text-[#e8e8e8]; }
}
&.rating-1 .star:nth-child(-n+1)::before,
&.rating-2 .star:nth-child(-n+2)::before,
&.rating-3 .star:nth-child(-n+3)::before,
&.rating-4 .star:nth-child(-n+4)::before,
&.rating-5 .star:nth-child(-n+5)::before { color: #ffcf30; }
}
.green-dot-rating .rating-wrap {
.star { @apply pr-[13px]; &:before { content: ""; @apply w-2.5 top-[5px] h-2.5 rounded-full bg-[#c2efdf]; } }
&.rating-1 .star:nth-child(-n+1)::before,
&.rating-2 .star:nth-child(-n+2)::before,
&.rating-3 .star:nth-child(-n+3)::before,
&.rating-4 .star:nth-child(-n+4)::before,
&.rating-5 .star:nth-child(-n+5)::before { background-color: #00a96c; }
}

/* ── Typeahead ──────────────────────────────────────────────────────────── */
.typeahead-standalone {
.tt-list { @apply border-0 -top-[21px] z-0; padding: 35px 10px 10px; }
.tt-input { background-color: #fff !important; }
.tt-list .tt-suggestion {
@apply p-[5px];
&:hover, &.tt-selected { background: rgba(36,32,95,0.08); }
}
}
.tt-suggestion {
padding: 7px 7px 1px 7px !important;
&:nth-child(even) { @apply bg-[#e9f7ff] mb-[5px]! rounded!; }
}

/* ── Search suggest ─────────────────────────────────────────────────────── */
.search-suggest {
&__item { @apply p-0! mb-2; }
a { @apply text-black font-bold transition-all duration-[400ms]; &:hover { @apply text-black! transition-all duration-500; } }
span { @apply text-[#212121] block -mt-[5px] text-xs; }
}
.search-suggest_image { flex: 0 0 60px; }
.search-suggest_content a { @apply leading-[18px] text-base inline-block text-left; }

/* ── Navigation ─────────────────────────────────────────────────────────── */
.menu-toggle { color: #666; @apply w-[25px] relative -mt-[3px]; }
.menu-toggle-bar {
@apply block absolute right-0 w-full h-0.5 rounded bg-black transition-all duration-300;
top: 50%;
&--top { transform: translate(0,-8px); }
&--bottom { transform: translate(0,8px); }
}
[aria-expanded="true"], .nav-open {
.menu-toggle-bar--top { transform: translate(0,0) rotate(45deg); }
.menu-toggle-bar--middle { @apply opacity-0; }
.menu-toggle-bar--bottom { transform: translate(0,0) rotate(-45deg); }
}

nav {
.dropdown {
@apply bg-white z-10 rounded-b;
li:first-child a { @apply pt-0!; }
li:first-child .nested-dropdown li:first-child a { @apply pt-0!; }
li:first-child .nested-dropdown a { @apply py-2.5!; }
a { @apply text-black; &.text-primary { @apply text-black!; } }
.w-\[270px\] li:last-child {
a { @apply pb-0; }
.nested-dropdown a { @apply border-b border-dashed border-[#ebebeb] py-2.5; }
.nested-dropdown li:last-child a { @apply border-b-0 pb-0!; }
}
}
.nested-dropdown { @apply bg-white; li:last-child a { @apply pb-0; } }
}

.mob-nav {
@apply py-[18px] px-[15px];
&.sticky { animation: slideDown ease-out 0.8s; @apply fixed w-full top-0 z-[99]; }
}

.megamenu-items li {
@apply grid min-w-[260px];
grid-template-rows: 1fr auto;
page-break-inside: avoid; break-inside: avoid;
&:last-child a.border-b { @apply border-b border-[#ececec]!; }
}

.dropdown-toggle { @apply cursor-pointer bg-transparent border-0 p-0 text-left; }
.icon { @apply transition-transform duration-300; }
.nested-dropdown {
@apply hidden rounded;
&:hover { @apply block; }
li a { @apply block border-b border-dashed border-[#ebebeb] py-2.5; }
li:first-child a { @apply pt-0!; }
li:last-child a { @apply border-b-0; }
}
.nested-dropdown-wrap:hover + .nested-dropdown { @apply block; }
a.nested-dropdown-wrap { @apply border-b border-dashed border-[#ebebeb] py-2.5; }
.dropdown li:last-child a { @apply border-b-0; }

#mobile-nav {
ul {
@apply relative mx-4 max-h-0 overflow-hidden p-0 transition-all duration-500;
li {
@apply border-t border-white/[0.075] list-none mb-0 relative py-[15px];
a { @apply inline-block w-full p-0 text-base font-bold text-white no-underline leading-3; }
}
&:first-child { @apply bg-transparent; }
ul { @apply m-0; }
ul li { @apply border-t-0 py-[5px] px-4; }
li ul li .open-menu { @apply top-3 min-h-[70%]; }
li ul li a { @apply text-base font-normal leading-[22px]; }
li ul li ul { @apply overflow-y-auto; }
li ul li ul li {
@apply relative py-2.5;
&:before { @apply content-[''] w-[5px] h-px bg-white absolute -left-[14px] top-[11px]; }
a { @apply text-sm leading-[22px]; }
}
&.open { @apply max-h-screen overflow-y-auto block; }
}
.open-menu {
@apply text-white text-2xl font-bold cursor-pointer absolute -right-px w-full text-right top-4 leading-6;
.icon-minus { @apply hidden; }
.icon-plus { @apply relative -top-[5px]; }
&.rotate { .icon-plus { @apply hidden; } .icon-minus { @apply block; } }
}
.overflow {
@apply bg-black overflow-x-hidden overflow-y-auto absolute left-0 z-[9999] w-full mt-2;
> ul { @apply h-0 overflow-hidden transition-all duration-500; }
}
}

/* ── Header ─────────────────────────────────────────────────────────────── */
.header {
@apply z-[100] relative;
.header__menu {
@apply w-full relative z-[2] py-[15px];
&::before {
@apply content-[''] w-full absolute left-0 top-0 h-full z-50 pointer-events-none;
box-shadow: 0px 1px 4px 0px rgba(31,67,155,0.3);
}
li.active .leading-\[14px\] { @apply text-black; }
.dropdown { animation: growDown 250ms ease-in-out forwards; transform-origin: top center; @apply rounded-b; }
&.sticky {
animation: slideDown ease-out 0.8s;
@apply fixed w-full top-0 z-[99] bg-white py-[5px];
.dropdown { @apply top-[57px]; }
.nav-menu { @apply min-h-[52px] flex items-center; }
}
}
.nav-tab-links {
@apply py-2.5 pl-[15px];
button { @apply w-full font-medium py-[7px] px-2.5 text-white; &.active { @apply bg-white rounded-l text-black; } }
}
.tab-content.active { @apply block!; }
}

/* ── No-header-sticky ───────────────────────────────────────────────────── */
.no-header-sticky header { @apply z-[1010]; }
.no-header-sticky:where(.header__menu.sticky, .mob-nav.sticky) { @apply relative!; }

/* ── Buttons ────────────────────────────────────────────────────────────── */
button { @apply cursor-pointer; }
.btn-primary {
@apply inline-flex items-center w-fit gap-2 px-2 py-2 text-sm rounded-full border-2 border-dotted border-primary text-text_color transition-all duration-500;
&:hover { @apply bg-primary text-white; }
}

/* ── Blockquote / custom quote ──────────────────────────────────────────── */
.custom-block-quote-section,
blockquote,
.package-page__main-content .package__itinerary-note {
@apply bg-[#fff5d5] rounded-[10px] px-[30px] py-[25px] mb-[25px];
}

/* ── Author profile ─────────────────────────────────────────────────────── */
.author-profile {
&__image {
.placeholder__img-wrapper { padding-bottom: calc(200/200*100%); img { @apply w-full h-full; } }
}
&__social-facebook { @apply bg-[#3b5998]; }
&__social-x { @apply bg-black; }
&__social-linkedin { @apply bg-[#0a66c2]; }
}

/* ── Sidebar TOC ────────────────────────────────────────────────────────── */
#toggleButton {
@apply hidden absolute -right-[45px] top-[50px] bg-[#f4f8fa] p-[8px_8px_1px] rounded-[0_5px_5px_0] z-20;
box-shadow: 2px 2px 4px 0px rgba(0,0,0,0.32);
}
#sidebar-toc {
@apply rounded;
::marker { display: none !important; -webkit-appearance: none; }
.toc-list {
@apply max-h-full list-none pl-2.5;
counter-reset: list-counter;
.toc-link::before { content: none; }
ol { @apply mb-0!; }
li {
counter-increment: list-counter;
@apply text-sm leading-[18px] mb-[5px] pl-2.5!;
&:before { content: counter(list-counter) ". "; @apply text-sm; }
&::marker { display: none !important; content: ""; -webkit-appearance: none; }
a { @apply transition-all duration-[400ms] leading-5; &:hover { @apply text-black transition-all duration-[400ms]; } }
}
.toc-list { @apply pl-5; }
}
.toc-list-wrapper { @apply max-h-[75vh] overflow-y-auto; }
.close-icon { @apply hidden; }
&.active { .close-icon { @apply block; } .show-icon { @apply hidden; } }
}

/* ── Inner banner ───────────────────────────────────────────────────────── */
.inner-banner {
@apply relative mt-[35px];
.placeholder__img-wrapper {
padding-top: calc(630/1400*100%);
@apply rounded-[15px];
.placeholder__img::after { z-index: -1; @apply rounded-[15px]; }
img { @apply w-full rounded-[15px]; }
}
}

/* ── Breadcrumbs ────────────────────────────────────────────────────────── */
.breadcrumbs__wrapper {
@apply py-[15px];
.breadcrumbs__list-item {
@apply relative pr-5;
&:before { content: "/"; @apply absolute right-[7px] top-0 text-sm; }
&:last-child:before { content: none; }
a:hover { @apply text-black; }
}
}

/* ── Category list ──────────────────────────────────────────────────────── */
.category-list__item {
&::before {
@apply content-[''] absolute left-0 bottom-0 w-full h-[70%] z-[3] pointer-events-none rounded;
background: linear-gradient(0deg,rgba(0,0,0,.75) 0%,rgba(247,248,250,0) 58%);
transition: all ease 0.5s;
}
&:hover::before { @apply h-full; background: linear-gradient(0deg,rgba(0,0,0,.75) 0%,rgba(247,248,250,0) 100%); }
.category-list__item-image .placeholder__img-wrapper { padding-top: calc(800/600*100%); }
.category-list__item-content:before {
content: url("../images/svg/curl-line.svg");
@apply absolute left-1/2 -translate-x-1/2 -bottom-[7px] w-[90px] h-[15px];
}
}
.category-page {
.category-list__item { @apply rounded-[20px]; &:before { @apply rounded-[20px]; } }
.category-list__item .placeholder__img-wrapper { @apply rounded-[20px]; &:before, &:after { @apply rounded-[20px]; } }
.category-list__item .placeholder__img-wrapper .placeholder__img { @apply rounded-[20px]; img { @apply rounded-[20px]; } }
}

/* ── Package list ───────────────────────────────────────────────────────── */
.package-list__item {
@apply rounded-xl overflow-hidden bg-white flex flex-col h-full;
&-image {
.placeholder__img-wrapper {
padding-top: 75%;
@apply rounded-[20px] overflow-hidden w-full;
&:after { @apply rounded-[20px]; }
.placeholder__img { @apply rounded-[20px]; }
img { @apply rounded-[20px] scale-100 transition-all duration-500; &:hover { @apply scale-[1.05] duration-[600ms]; } }
}
}
&-map .icon-map-pin:before { color: #fffefd; }
&-content {
@apply p-5 flex flex-col flex-grow;
.package-list__item-meta { @apply relative z-10 w-full rounded-[20px] px-5 py-[15px] min-h-12; }
}
}

/* ── Blog list ──────────────────────────────────────────────────────────── */
.blog-list__item .placeholder__img-wrapper {
padding-top: calc(450/600*100%);
@apply overflow-hidden rounded-[10px];
img { @apply rounded-[10px] scale-100 transition-all duration-500; &:hover { @apply scale-[1.05] duration-[600ms]; } }
}
.blog-page__featured-image .placeholder__img-wrapper { padding-top: calc(450/600*100%); }
.blog-author-share {
.blog-author__image .placeholder__img-wrapper { padding-top: calc(200/200*100%); @apply w-full rounded-full; img { @apply w-full rounded-full; } }
}
.blog__nav {
@apply relative justify-between items-center;
.placeholder__img-wrapper { padding-top: calc(450/600*100%); }
&-prev { @apply w-1/2; } &-prev-img { flex: 0 0 100px; }
&-next { @apply w-1/2; } &-next-img { flex: 0 0 100px; }
}

/* ── Offer package ──────────────────────────────────────────────────────── */
.offer-package__item-image {
flex: 0 0 200px; @apply max-h-[170px];
.placeholder__img-wrapper { padding-top: calc(630/600*100%); @apply w-full max-h-[170px]; img { @apply w-full max-h-[170px] object-cover; } }
}
.offer-package__item-title a { @apply text-black!; &:hover { @apply no-underline; } }

/* ── Gallery / album ────────────────────────────────────────────────────── */
.album-list__item .placeholder__img-wrapper {
padding-top: calc(450/600*100%); @apply overflow-hidden rounded-[10px];
img { @apply scale-100 rounded-[10px] transition-all duration-[400ms]; &:hover { @apply scale-110 duration-500; } }
}
.gallery-list__item {
@apply relative;
.placeholder__img-wrapper { padding-top: calc(450/600*100%); @apply overflow-hidden rounded-[10px]; img { @apply rounded-[10px] scale-100 transition-all duration-[400ms]; &:hover { @apply scale-110 duration-500; } } }
.zoom-icon { @apply opacity-0 transition-all duration-[400ms] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-black/20 w-full h-full rounded-[10px] z-[1]; .icon-magnify-glass { @apply absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2; } }
&:hover .zoom-icon { @apply opacity-100 duration-500; }
}

/* ── Reviews ────────────────────────────────────────────────────────────── */
.review-list__item {
@apply bg-white border border-[#90d4ff] p-[30px] rounded-[10px];
.rating-wrap.rating-1 .star:nth-child(-n+1)::before,
.rating-wrap.rating-2 .star:nth-child(-n+2)::before,
.rating-wrap.rating-3 .star:nth-child(-n+3)::before,
.rating-wrap.rating-4 .star:nth-child(-n+4)::before,
.rating-wrap.rating-5 .star:nth-child(-n+5)::before { color: #dfd200; }
&-reviewer-image {
@apply w-full;
.placeholder__img-wrapper { padding-top: calc(55/55*100%); @apply w-full rounded-full; &:after { @apply rounded-full; } .placeholder__img { @apply w-full rounded-full; img { @apply w-full rounded-full; } } }
}
}

/* ── Video review ───────────────────────────────────────────────────────── */
.video-review {
.video-review__item-image {
@apply relative;
&:before { @apply content-[''] w-full h-full rounded-[10px] absolute left-0 top-0 pointer-events-none bg-black/[0.07] z-[2]; }
.placeholder__img-wrapper { padding-top: calc(800/600*100%); @apply rounded-[10px] overflow-hidden; img { @apply rounded-[10px]; } }
}
.video-review__item-link {
.circular-animate::after { @apply bg-transparent; }
.circular-animate:before { @apply w-[70px] h-[70px]; }
.icon-play:before { color: #000; }
}
.video-review__item-content {
@apply relative -top-[40px] z-10 w-[90%] mx-auto -mb-[40px] rounded-[10px] px-5 py-[15px] bg-white;
box-shadow: 0px 1px 4px 0px rgba(36,32,95,0.1);
}
}
.inner__video-review { @apply relative; &::before { @apply content-[''] w-full h-[140px] absolute left-0 bottom-0 bg-white; } }

/* ── Why us ─────────────────────────────────────────────────────────────── */
.whyus__item { @apply px-[40px] py-[35px]; }
.whyus-wrapper {
.col-span-12:nth-child(1) .whyus__item { @apply bg-[#e9f7ff]; }
.col-span-12:nth-child(2) .whyus__item { @apply bg-[#fff5d5]; }
.col-span-12:nth-child(3) .whyus__item { @apply bg-[#fff9f6]; }
.col-span-12:nth-child(4) .whyus__item { @apply bg-[#f4f4f4]; }
}

/* ── Legal documents ────────────────────────────────────────────────────── */
.legal-document__item {
@apply bg-black p-[13px] rounded-[10px];
.legal-document__item-image .placeholder__img-wrapper { padding-top: calc(400/400*100%); img { @apply object-cover; } }
}

/* ── Sitemap ────────────────────────────────────────────────────────────── */
.sitemap-page__col-title {
@apply text-[20px] inline-block mb-2.5 text-black font-bold mt-5;
font-family: var(--font-exo);
&:first-child { @apply mt-0; }
a { @apply text-[20px] text-black font-bold relative; font-family: var(--font-exo); }
}
.sitemap-page__col ul {
column-count: 3;
li { @apply leading-7; a { @apply text-black font-medium pl-6 relative; &:before { @apply content-[''] w-2 h-0.5 bg-black absolute left-0 top-[11px]; } &:hover { @apply text-black; } } }
}

/* ── Team page ──────────────────────────────────────────────────────────── */
.team-page {
.team-list__item {
figure figcaption { @apply relative -top-10 z-10 w-[93%] mx-auto -mb-10 rounded-[10px] px-5 py-[15px] bg-white; box-shadow: 0px 1px 4px 0px rgba(36,32,95,0.1); }
.placeholder__img-wrapper { padding-top: calc(600/600*100%); img { @apply rounded; } }
}
}
.team-details-page__description-image .placeholder__img-wrapper { padding-top: calc(600/600*100%); img { @apply rounded; } }

/* ── Contact page ───────────────────────────────────────────────────────── */
.contact-page {
&__info-title { @apply relative; &:after { @apply content-[''] w-[65px] h-px bg-[#ccecdc] absolute left-0 -bottom-2.5; } }
&__form {
@apply relative;
&:before { @apply content-[''] w-[56%] h-full bg-dim_bg rounded-[0_10px_10px_0] -z-[1] pointer-events-none absolute left-0 top-0; }
input, select, textarea { background: #d2edff !important; @apply border-0!; }
}
&__map { iframe { @apply min-h-[435px] w-full; } }
}

/* ── Booking page ───────────────────────────────────────────────────────── */
.booking-page .booking-info__package img { @apply h-[60px] object-cover; }

/* ── Useful info ────────────────────────────────────────────────────────── */
.useful-info {
h2 { font-size: 28px; line-height: 34px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h3 { font-size: 23px; line-height: 31px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h4 { font-size: 20px; line-height: 26px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h5 { font-size: 18px; line-height: 24px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h6 { font-size: 16px; line-height: 20px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
table { @apply w-full! max-w-full mb-4; tr:first-child td { @apply font-medium text-black; } tr:nth-child(even) { background: #000; } tr td { @apply text-black px-2.5 py-2; } }
ul { @apply mb-7; li { @apply text-base text-black pl-[30px] relative mb-[15px] leading-[22px]; &::before { content: url("../images/svg/list-icon.svg"); @apply absolute left-0 top-0.5 w-[22px] h-[22px]; } } }
figure.image { @apply relative mb-5; img { @apply rounded; } figcaption { @apply text-[13px] text-black; } }
}

/* ── Package page ───────────────────────────────────────────────────────── */
.package-page__nav {
animation: slideDown ease-out 0.8s;
&-item {
@apply transition-all duration-300 px-3 py-2 inline-block;
&.active { @apply bg-black; }
&.visible {
@apply visible flex justify-between items-center flex-wrap h-[70px] rounded-[4px] p-0 z-[1001];
animation: slideDown 0.8s ease-out;
transform: translateY(0);
transition: all ease 0.8s;
}
}
}

.package-page__banner {
.placeholder__img-wrapper {
padding-top: calc(900/1200*100%);
@apply rounded h-full;
&:before { @apply content-[''] w-full h-full bg-black/15 absolute left-0 top-0 z-[3] pointer-events-none rounded; }
.placeholder__img { @apply rounded h-full; img { @apply relative z-[1] w-full h-full object-cover rounded; } }
}
&-wrapper { @apply flex w-full gap-2.5; }
&-item { transition: width 0.4s ease; @apply min-h-[535px]; }
.banner-half { @apply w-1/4; &.lg { @apply w-1/2; } }
.banner-quarter { @apply w-1/4; }
.package-page__banner-item:hover { @apply w-1/2; }
.banner-quarter:hover ~ .package-page__banner-item { @apply w-1/4; }
}

.package-page__main-content {
@apply mt-[30px];
.package__section-title { font-family: var(--font-exo); @apply font-black text-[35px] text-black mb-[25px] leading-[38px]; }
.package__rating { @apply mb-[15px]; }
.package__rating-tripadvisor .icon-dot-rating:before { color: #2aab6f; }
.package__summary {
p { @apply font-bold; }
h2 { font-size: 28px; line-height: 34px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h3 { font-size: 23px; line-height: 31px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h4 { font-size: 20px; line-height: 26px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h5 { font-size: 18px; line-height: 24px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h6 { font-size: 16px; line-height: 22px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
ul li { @apply text-base text-black pl-[30px] relative mb-[15px] leading-[22px]; &::before { content: url("../images/svg/list-icon.svg"); @apply absolute left-0 top-0.5 w-[22px] h-[22px]; } }
figure.image { @apply relative mb-5; img { @apply rounded; } figcaption { @apply text-[13px] text-black; } }
}
.package__gallery-item {
@apply relative;
.placeholder__img-wrapper { padding-top: calc(450/600*100%); @apply overflow-hidden rounded-[10px]; img { @apply rounded-[10px] scale-100 transition-all duration-[400ms]; &:hover { @apply scale-110 duration-500; } } }
.zoom-icon { @apply opacity-0 transition-all duration-[400ms] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-black/20 w-full h-full rounded-[10px] z-[1]; .icon-magnify-glass { @apply absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2; } }
&:hover .zoom-icon { @apply opacity-100 duration-500; }
}
.package__video {
.placeholder__img-wrapper { padding-top: calc(675/1200*100%); @apply rounded-[10px]; .placeholder__img { @apply rounded-[10px]; &:after { @apply rounded-[10px]; } img { @apply rounded-[10px]; } } }
.circular-animate:after { @apply opacity-60 w-[100px] h-[100px] -z-[1]; }
.circular-animate .icon-play:before { color: #000; }
}
.package__itinerary .itinerary-meta-image img { @apply h-[130px] object-cover rounded-[10px]; }
.package__cost-details {
.cost-content-wrap {
h2 { font-size: 28px; line-height: 34px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h3 { font-size: 23px; line-height: 31px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h4 { font-size: 20px; line-height: 26px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h5 { font-size: 18px; line-height: 24px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
h6 { font-size: 16px; line-height: 22px; @apply text-black mb-3 font-bold; font-family: var(--font-exo); }
}
.cost-includes .cost-content-wrap ul li { @apply text-base text-black pl-[30px] relative mb-[15px] leading-[22px]; &::before { content: "\e927"; font-family: "icomoon" !important; @apply w-[25px] h-[25px] text-2xl text-[#7eb2e0] absolute left-0 top-0.5; } }
.cost-excludes .cost-content-wrap ul li { @apply text-base text-black pl-[30px] relative mb-[15px] leading-[22px]; &::before { content: "\e92e"; font-family: "icomoon" !important; @apply w-[25px] h-[25px] text-2xl text-[#ffac79] absolute left-0 top-0.5; } }
}
.package__availability {
&-filter-item { @apply border border-[#90d4ff] px-[11px] py-[5px] rounded-[7px]; &.active { @apply bg-black border-black text-white; } }
.package__availability__title-status,
.package__availability__title-cost,
.package__availability-item-status,
.package__availability-item-cost { @apply pl-[25px]; }
&-note { @apply bg-[#fff5d5] rounded-[10px] px-[30px] py-[25px] mb-[25px] text-[15px] leading-[22px]; p { @apply text-[15px] leading-[22px]; } }
}
.package__addons {
.accordion { @apply mt-[15px]; }
.accordion__item {
@apply bg-white rounded relative border-b-0 mb-2.5;
&:before { @apply content-[''] w-[35px] h-[35px] bg-[#e9f7ff] absolute right-2.5 top-2.5 rounded; }
&-title { @apply pt-[15px] pr-10 pb-[15px] pl-[15px]; &::before { @apply top-[27px] right-[19px] bg-black; } &::after { @apply top-[27px] right-[25px] bg-black; } }
&-content { @apply px-5; }
}
}
.package__faq {
.accordion { @apply mt-[15px]; }
.accordion__item {
@apply bg-white rounded-none relative border-b-0 mb-2.5 border-t border-[#ffeade];
&:last-child { @apply border-b border-[#ffeade]; }
&:before { @apply content-[''] w-[30px] h-[30px] bg-[#ffe3d2] absolute right-2.5 top-2.5 rounded; }
&-title { @apply pt-[15px] pr-10 pb-[15px] pl-0; &::before { @apply top-[26px] right-[19px] w-3 bg-black; } &::after { @apply top-[28px] right-6 h-3 bg-black; } }
&-content { @apply pt-0! pl-10; }
}
}
.package__price-sidebar {
.package__meta-content { @apply opacity-0 max-w-0 whitespace-nowrap overflow-hidden; transition: opacity 0.3s ease, max-width 0.3s ease; }
.package__meta-share .package__meta-content { @apply opacity-100 max-w-[120px]; }
.package__meta-gallery,
.package__meta-video,
.package__meta-customize,
.package__meta-download,
.package__meta-share { @apply overflow-hidden; }
.package__meta-gallery:hover,
.package__meta-video:hover,
.package__meta-customize:hover,
.package__meta-download:hover,
.package__meta-share:hover { .package__meta-content { @apply opacity-100 max-w-[120px]; } }
.package__meta:hover .package__meta-share .package__meta-content { @apply opacity-0 max-w-0; }
.package__meta:hover .package__meta-share:hover .package__meta-content { @apply opacity-100 max-w-[120px]; }
}
.package__price-breakdown {
@apply pb-10! relative;
&:before { @apply content-[''] w-full h-[120px] rounded-t-[10px] bg-[#24205f] absolute left-0 top-0 -z-[1]; }
}
.package__price-note { @apply text-sm leading-[22px] text-black; p { @apply text-sm leading-[22px] text-black; } }
.package__itinerary-note { @apply bg-[#fff5d5] rounded-[10px] px-[30px] py-[25px] mb-[25px]; a { @apply font-bold text-black!; &:hover { @apply underline; } } }
}

/* ── Homepage ───────────────────────────────────────────────────────────── */
.homepage__banner {
@apply relative z-[5];
/* no SVG divider in this variant — empty :before */
&:before { @apply content-[''] w-full h-auto absolute left-0 -bottom-2; }
&-search { box-shadow: 0 0px 7px 0px rgba(36,32,95,0.21); @apply z-[100]!; }
&-search input:active,
&-search input:visited,
&-search input:hover,
&-search input:checked,
&-search input:disabled,
&-search input:read-only,
&-search input:not(:focus) { background: White !important; }
}
.homepage__main-content {
@apply relative overflow-hidden;
&:before { content: url("../images/svg/swoyambhu-illustrator.svg"); @apply w-[850px] h-auto absolute right-0 translate-x-[38%] -bottom-2; }
.container { @apply relative z-[5]; }
.welcome-content blockquote,
.welcome-content .custom-block-quote-section { @apply mb-[30px] pl-5 pr-0 py-0! rounded-none bg-white border-l-2 border-black font-bold text-black; }
}
.homepage__whyus {
@apply relative overflow-hidden;
&:before { content: url("../images/svg/bhutan-illustrator.svg"); @apply w-[750px] h-auto absolute right-0 translate-x-[54%] -bottom-5; }
}
.homepage__last-minute { @apply overflow-x-hidden; }
.homepage__video-review {
@apply relative;
&::before { @apply content-[''] w-full h-[90px] absolute left-0 bottom-0 bg-white; }
}
.homepage__blog {
.blog-list__item.blog-no-thumb .blog-list__item-content { @apply top-0 p-0 w-full shadow-none mb-0 rounded-none pb-10 mb-10 border-b border-[#ffe3d2]; }
.col-span-12:first-child .blog-list__item-content { @apply relative -top-10 z-10 w-[93%] mx-auto -mb-10 rounded-[10px] px-5 py-[15px] bg-white; box-shadow: 0px 1px 4px 0px rgba(36,32,95,0.1); }
}
.homepage__deals {
.bg-secondary { @apply relative; &::after { content: url("../images/svg/reading-illustrator.svg"); @apply w-[230px] h-[180px] absolute right-[30px] bottom-0 z-[1]; } div { @apply relative z-10; } }
.bg-\[\#90d4ff\] { @apply relative; &::after { content: url("../images/svg/paper-plane.svg"); @apply w-[140px] h-[140px] absolute right-[30px] bottom-[30px] z-[1]; } div { @apply relative z-10; } }
}

/* ── Footer ─────────────────────────────────────────────────────────────── */
.footer__contact-options {
@apply relative;
&:before { @apply content-[''] bg-[#fff9f6] h-[63%] w-full absolute left-0 bottom-0 -z-[1]; }
.icon-calendar-month:before { color: #ffae7c; }
}
.footer__contact-links {
@apply relative;
&:before { content: url("../images/svg/footer-illustrator.svg"); @apply w-full h-auto absolute right-0; }
}

/* ── Page-specific filter selects ───────────────────────────────────────── */
.search-page__filter select,
.last-minute-page__filter select,
.blog-list__sort-category select,
.review-page__filter select {
@apply bg-black text-white;
background-image: url("../images/svg/white-down.svg");
}
.review-page__filter select,
.last-minute-page__filter select,
.search-page__filter select { padding: 10px 8px 10px 12px !important; }
.review-page__list .review-list__item { page-break-inside: avoid; break-inside: avoid; @apply mb-[35px]; }

/* ── Notice ─────────────────────────────────────────────────────────────── */
.notice__wrapper .icon-cross:before { @apply text-white; }

/* ── FAQ page ───────────────────────────────────────────────────────────── */
.faqs-page__wrapper .accordion__item-title { @apply pr-[50px]; }

/* ── Package video review ───────────────────────────────────────────────── */
.package__video-review:before { content: none; }

/* ── Spacing helpers ────────────────────────────────────────────────────── */
.package-page + .inner__review.common-box.pb-0 { @apply pt-[60px]!; }
.inner__review + .footer { @apply mt-[60px]!; }

/* ── Misc utility ───────────────────────────────────────────────────────── */
.text-secondary.icon-cross:before { color: #fff !important; }
}

/* ═══════════════════════════════════════════════════════════════════════════ */
/* RESPONSIVE OVERRIDES */
/* ═══════════════════════════════════════════════════════════════════════════ */

@media (max-width: 1830px) { .footer__contact-links:before { top: -200px; } }
@media (max-width: 1600px) { .footer__contact-links:before { top: -180px; } }
@media (max-width: 1440px) { .footer__contact-links:before { top: -160px; } }
@media (max-width: 1279px) { .footer__contact-links:before { top: -120px; } }

@media (max-width: 1199px) {
.package-list__item-content { padding: 0 15px; }
.package__availability-item-link .bg-primary-effect { padding: 8px 10px; }
}

@media (max-width: 1023px) {
.author-profile__image { width: 250px; }
.no-header-sticky .package-quick-book { display: flex; }
.no-header-sticky .mob-quick-contact { display: none; }
.hav-title-btn { position: relative; padding-bottom: 110px !important; }
.hav-title-btn .section-title-btn { position: absolute; left: 15px; bottom: 50px; z-index: 10; width: 80%; }
img { scale: 1; } img:hover { scale: 1 !important; }
.scroll-wrap .grid { display: flex; padding-bottom: 20px; overflow-x: auto; padding-left: 5px; padding-top: 3px; }
.scroll-wrap .grid .col-span-6,
.scroll-wrap .grid .col-span-4,
.scroll-wrap .grid .col-span-3 { flex: 0 0 45%; }
.sitemap-page__col ul { column-count: 2 !important; }
#sidebar-toc { position: fixed; left: -400px; top: 12%; transition: all 0.3s ease; z-index: 5; width: 85%; max-width: 400px; }
#sidebar-toc.active { left: 0; transition: all ease 400ms; z-index: 10; }

.footer__copyright { padding-bottom: 80px; }
.package__availability-item-cost,
.package__availability-item-status { padding-left: 0 !important; }
.inner__review .review-list__item-platforms { top: 20px !important; }
.contact-page__map { margin-top: 30px; }
.whyus-wrapper .grid { gap: 15px !important; }
.footer__contact-links:before { top: -90px; }

/* last minute tablet */
.last-minute .last-minute__title { display: none; }
.last-minute .last-minute-wrap { display: flex; align-items: center; flex-wrap: wrap; gap: 10px; }
.last-minute .last-minute-wrap .last-minute-package-title { flex: 0 0 100%; }
.last-minute .last-minute-wrap .last-minute__item { flex: 0 0 49%; display: flex; flex-wrap: wrap; }
.last-minute .last-minute-wrap .last-minute__item-start,
.last-minute .last-minute-wrap .last-minute__item-finish { flex: 0 0 100%; margin-bottom: 10px; }
.last-minute .last-minute-wrap .last-minute__item-start span,
.last-minute .last-minute-wrap .last-minute__item-finish span { padding-right: 5px; font-size: 14px; line-height: 20px; }
.last-minute .last-minute-wrap .last-minute__item-group,
.last-minute .last-minute-wrap .last-minute__item-status { flex: 0 0 48%; min-height: 65px; }
.last-minute .last-minute-wrap .last-minute__item-group span,
.last-minute .last-minute-wrap .last-minute__item-status span { padding-right: 5px; font-size: 14px; line-height: 20px; }
.last-minute .last-minute-wrap .last-minute__item-group .flex-row,
.last-minute .last-minute-wrap .last-minute__item-status .flex-row { flex-wrap: wrap; }
.last-minute .last-minute-wrap .last-minute__item-price,
.last-minute .last-minute-wrap .last-minute__item-buttom { margin-top: 10px; }
.homepage__last-minute .last-minute-list .grid,
.last-minute-page .last-minute-list .grid { gap: 5px !important; }
.homepage__last-minute .grid.gap-5,
.last-minute-page .grid.gap-5 { gap: 5px !important; }
.homepage__last-minute .last-minute__item,
.last-minute-page .last-minute__item { flex: 0 0 50%; display: flex; flex-wrap: wrap; }
.homepage__last-minute .last-minute__item .col-span-2:nth-child(1),
.last-minute-page .last-minute__item .col-span-2:nth-child(1),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(2),
.last-minute-page .last-minute__item .col-span-2:nth-child(2),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(3),
.last-minute-page .last-minute__item .col-span-2:nth-child(3) { grid-column: span 12 / span 12; }
.homepage__last-minute .last-minute__item .col-span-2:nth-child(4),
.last-minute-page .last-minute__item .col-span-2:nth-child(4) { grid-column: span 12 / span 12; margin-bottom: 10px !important; }
.homepage__last-minute .last-minute__item .col-span-2:nth-child(5),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(6),
.last-minute-page .last-minute__item .col-span-2:nth-child(5),
.last-minute-page .last-minute__item .col-span-2:nth-child(6) { grid-column: span 6 / span 6; }

.homepage__main-content:before, .homepage__whyus:before { opacity: 0.2; }
.homepage__review { padding-bottom: 110px !important; position: relative; }
.homepage__review .review-link { position: absolute; left: 15px; bottom: 50px; }
.homepage__review .review-list__item-platforms { top: 20px; }
.homepage__video-review:before { content: none; }
.homepage__video-review.common-box.pt-0 { padding-bottom: 80px !important; }
.homepage__video-review .grid { min-height: 530px; scrollbar-width: none !important; }
.homepage__video-review .section-title-btn { bottom: 60px !important; }
.homepage__pick .grid { scrollbar-width: none !important; }
.homepage__pick .section-title-btn { bottom: 60px !important; }
.homepage__pick .section-title-btn .mt-10 { margin-top: 0 !important; }
.homepage__blog .col-span-12:first-child { border-bottom: 1px solid #ffe3d2; padding-bottom: 30px; }
.homepage__blog .blog-no-thumb .blog-list__item-content { padding-bottom: 30px !important; margin-bottom: 30px !important; }

.package-page__banner-wrapper { flex-wrap: wrap; }
.package-page__banner-wrapper .package-page__banner-item.banner-half { width: 100% !important; min-height: 380px !important; height: 380px !important; }
.package-page__banner-wrapper .package-page__banner-item.banner-half .placeholder__img-wrapper { min-height: 380px !important; height: 380px !important; }
.package-page__banner-wrapper .package-page__banner-item.banner-quarter { flex: 0 1 49%; min-height: 200px !important; height: 200px !important; }
.package-page__banner-wrapper .package-page__banner-item.banner-quarter .placeholder__img-wrapper { min-height: 200px !important; height: 200px !important; }
.package-page__main-content .package__price-sidebar .package__meta-content { opacity: 1; max-width: 100%; }
.package__video-review { padding-bottom: 0px !important; }
.package__video-review .video-review__item { min-height: 520px; }
.package__video-review .grid { min-height: 530px; scrollbar-width: none !important; }
.inner__review.review-list .review-list__item { margin-bottom: 20px; }
.package__availability .package__availability-wrap { margin-top: 20px; }
.package__availability .package__availability-wrap .col-span-2 { grid-column: span 4 / span 4; }
.package__availability .package__availability-wrap .package__availability-item { flex: 1 0 50%; }
.package__availability .package__availability-wrap #my_departure { display: flex; flex-wrap: wrap; }
.package__availability .package__availability__title { display: none; }
.contact-page__form:before { width: 100%; border-radius: 0; }

button { cursor: pointer; }
.btn-primary { display: inline-flex; align-items: center; width: fit-content; gap: 0.5rem; padding: 0.5rem; font-size: 0.875rem; border-radius: 9999px; border: 2px dotted var(--color-primary); color: var(--color-text_color); transition: all 0.5s; }
.btn-primary:hover { background-color: var(--color-primary); color: #fff; }
}

@media (max-width: 767px) {
.package-page__main-content { margin-top: 10px !important; }
.breadcrumbs__wrapper .breadcrumbs__list-item:nth-last-child(2):before { content: none; }
.breadcrumbs__wrapper .breadcrumbs__list-item:last-child { display: none; }
.package__availability .package__availability-wrap .col-span-2 { grid-column: span 8 / span 8; }
.package__availability .package__availability-wrap .col-span-2:nth-child(2),
.package__availability .package__availability-wrap .col-span-2:nth-child(3) { grid-column: span 4 / span 4; }
.package__availability .package__availability__title { display: none; }
.package-list__item-content .package-list__item-meta { padding: 10px 15px; }
.package-list__item-content .package-list__item-meta .package-list__item-price { font-size: 14px; }
.package-list__item-content .package-list__item-meta .package-list__item-price .text-lg { font-size: 16px; }
.last-minute .last-minute__item-price { flex: 0 0 100%; }
.last-minute .last-minute__item-button { flex: 0 0 100%; margin-top: 10px; }
.scroll-wrap .grid .col-span-6,
.scroll-wrap .grid .col-span-4,
.scroll-wrap .grid .col-span-3 { flex: 0 0 50%; }
.footer__contact-links:before { top: -75px; }
.package__section-title { font-size: 28px !important; line-height: 30px !important; margin-bottom: 15px; }
.package-page__main-content .grid { gap: 0; }
}

@media (max-width: 639px) {
#sidebar-toc .rounded-r-\[5px\] { max-height: 75vh; overflow-y: auto; }
#sidebar-toc .close-icon { display: none; }
#sidebar-toc.active .close-icon { display: block; }
#sidebar-toc.active .show-icon { display: none; }
.sitemap-page__col ul { column-count: 1 !important; }
.offer-package__item { flex-wrap: wrap; }
.offer-package__item-image { max-height: 250px !important; height: 250px !important; flex: 0 0 100% !important; }
.offer-package__item-image .placeholder__img-wrapper,
.offer-package__item-image .placeholder__img-wrapper .placeholder__img { height: 250px !important; max-height: 250px !important; }
.offer-package__item-image .placeholder__img-wrapper .placeholder__img img { height: 250px !important; max-height: 250px !important; object-fit: cover; }
.popover-wrap { position: static; }
.popover-bg { top: 0; left: 0; .rotate-45 { display: none; } }
.package__facts { position: relative; }
.scroll-wrap .grid .col-span-6,
.scroll-wrap .grid .col-span-4,
.scroll-wrap .grid .col-span-3 { flex: 0 0 90% !important; }
.blog-author-share { position: relative; margin-bottom: 60px; }
.blog-author-share .blog-share { position: absolute; left: 70px; bottom: -45px; border-top: 1px dashed #ddd; padding-top: 10px; width: calc(100% - 80px); }
.blog-author-share .share-list { right: auto; left: 0; }
.blog__nav .blog__nav-prev-img,
.blog__nav .blog__nav-next-img { display: none; }
.footer__affiliations { padding: 50px 0 !important; }
.footer__affiliations-wrap { gap: 10px; }
.footer__affiliations-wrap .footer__affiliations-item img { width: 40px; }
.footer__affiliations-wrap .footer__affiliations-item:last-child img { width: 90px; }
.homepage__last-minute .last-minute__item .col-span-2:nth-child(1),
.last-minute-page .last-minute__item .col-span-2:nth-child(1),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(2),
.last-minute-page .last-minute__item .col-span-2:nth-child(2),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(3),
.last-minute-page .last-minute__item .col-span-2:nth-child(3),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(4),
.last-minute-page .last-minute__item .col-span-2:nth-child(4),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(5),
.last-minute-page .last-minute__item .col-span-2:nth-child(5),
.homepage__last-minute .last-minute__item .col-span-2:nth-child(6),
.last-minute-page .last-minute__item .col-span-2:nth-child(6) { grid-column: span 6 / span 6; }
.homepage__last-minute .last-minute__item .col-span-2:nth-child(4),
.last-minute-page .last-minute__item .col-span-2:nth-child(4) { margin-bottom: 10px !important; }
.homepage__banner-media { margin-top: 30px; }
.last-minute .last-minute__item { flex: 0 0 100% !important; }
.last-minute .last-minute__item-button, .last-minute .last-minute__item-price { flex: 0 0 50%; }
.last-minute .last-minute__item-button .line-through, .last-minute .last-minute__item-price .line-through { margin-left: 5px; }
.homepage__pick { padding-bottom: 100px !important; }
.homepage__video-review.pt-0.pb-0 { padding-bottom: 100px !important; }
.homepage__video-review.pt-0.pb-0 .section-title-btn a { margin-top: 0 !important; }
.homepage__deals .bg-secondary::after { opacity: 0.4; }
.footer__contact-links:before { top: -55px; }
.homepage__banner:before { bottom: -12px !important; }
.package-page__banner-wrapper .package-page__banner-item.banner-half { min-height: 250px !important; height: 250px !important; }
.package-page__banner-wrapper .package-page__banner-item.banner-half .placeholder__img-wrapper { min-height: 250px !important; height: 250px !important; }
.package-page__ban
