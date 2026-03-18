document.getElementById('openPlanTourFromNav').onclick = function() {
    document.getElementById('planTourModal').style.display = 'block';
};

document.querySelectorAll('.openPlanTourBtn').forEach(btn => {
    btn.onclick = function () {
        document.getElementById('planTourModal').style.display = 'block';
    };
});

// Close button
document.getElementById('closePlanTourModal').onclick = function() {
    document.getElementById('planTourModal').style.display = 'none';
};
