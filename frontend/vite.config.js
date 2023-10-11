import { defineConfig } from 'vite';
import path from 'path';
import { readdirSync } from 'fs';
import { join } from 'path';

const inputFiles = readdirSync(join(__dirname, 'src')).filter(file => file.endsWith('.ts') || file.endsWith('.scss'));

const entryPoints = inputFiles.reduce((acc, file) => {
    const name = file.split('.')[0]; // Usuń rozszerzenie
    acc[name] = join(__dirname, 'src', file);
    return acc;
}, {});

export default defineConfig({
    build: {
        manifest: true,
        outDir: path.resolve(__dirname, '../public/dist'),
        rollupOptions: {
            input: entryPoints
        }
    }
})