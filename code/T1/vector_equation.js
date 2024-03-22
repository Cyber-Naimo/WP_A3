class QuadraticEquationSolver {
    static async calculateRoots(a, b, c) {
        
        const delay = ms => new Promise(resolve => setTimeout(resolve, ms));

        // Calculate discriminant asynchronously
        await delay(1000); 
        const discriminant = Math.pow(b, 2) - 4 * a * c;

        // Calculate square root asynchronously
        await delay(1500); 
        const sqrt = Math.sqrt(discriminant);

        // Calculate roots asynchronously
        await delay(2000); 
        const root1 = (-b + sqrt) / (2 * a);
        const root2 = (-b - sqrt) / (2 * a);

        return { root1, root2 };
    }
}


async function solveQuadratic() {
    const a = parseFloat(document.getElementById('a').value);
    const b = parseFloat(document.getElementById('b').value);
    const c = parseFloat(document.getElementById('c').value);

    try {
        const { root1, root2 } = await QuadraticEquationSolver.calculateRoots(a, b, c);
        document.getElementById('output').innerHTML = `Root 1: ${root1.toFixed(2)}<br>Root 2: ${root2.toFixed(2)}`;
    } catch (error) {
        console.error("Error occurred:", error);
    }
}
