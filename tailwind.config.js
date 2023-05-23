/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    "./index.php",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'bg_pic': 'url("../asset/img/bg_pig.png")',
        'pic2': 'url("https://images.pexels.com/photos/1496372/pexels-photo-1496372.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1")'
      }
    },
  },
  plugins: [],
}
