async function  getPlans()
{
    let response = await fetch('/plans');
    console.log(response);
}
