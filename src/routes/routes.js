const express = require('express')
const router = express.Router();

router.get('/', (req,res) => {
    res.render('index')
});
router.get('/about', (req,res) => {
    res.render('about')
});
router.get('/contact', (req,res) => {
    res.render('contact')
});
router.get('/work', (req,res) => {
    res.render('work')
});

router.use((req,res)=>{
    res.status(404).render('404')
})

module.exports = router;