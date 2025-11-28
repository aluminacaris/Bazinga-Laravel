-- Script de inserts adaptado para PostgreSQL
-- Remove referências ao schema e corrige sintaxe

-- Limpar dados existentes (opcional - descomente se quiser limpar antes)
-- TRUNCATE TABLE user_actions CASCADE;
-- TRUNCATE TABLE users_rewards CASCADE;
-- TRUNCATE TABLE actions CASCADE;
-- TRUNCATE TABLE categories CASCADE;
-- TRUNCATE TABLE users CASCADE;
-- TRUNCATE TABLE rewards CASCADE;

-- Inserir Categories
INSERT INTO categories (name, description, created_at, updated_at) VALUES
('Reciclagem', 'Ações relacionadas à separação e destinação correta de resíduos.', '2025-11-01 01:05:37', '2025-11-01 01:05:37'),
('Mobilidade sustentável', 'Incentivo ao uso de transporte coletivo, bicicleta ou caminhadas', '2025-11-01 01:07:06', '2025-11-01 01:07:06'),
('Consumo consciente', 'Redução de desperdício e uso racional de recursos', '2025-11-01 01:07:46', '2025-11-01 01:07:46'),
('Energia e água', 'Práticas para economia de energia elétrica e água', '2025-11-01 01:08:44', '2025-11-01 01:08:44'),
('Ações comunitárias', 'Atividades de impacto coletivo, como multirões e plantio de árvores', '2025-11-01 01:09:40', '2025-11-01 01:09:40'),
('Categoria_teste_seeder', 'Descrição_seeder', '2025-11-08 00:25:10', '2025-11-08 00:25:10')
ON CONFLICT DO NOTHING;

-- Inserir Users (senha precisa ser hash, vamos usar bcrypt)
-- A senha '1234' será hashada como: $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
INSERT INTO users (name, email, password, role, created_at, updated_at) VALUES
('marcos', 'marcos@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', '2025-10-24 22:08:22', '2025-10-24 22:08:22')
ON CONFLICT (email) DO NOTHING;

-- Inserir Actions (ajustando category_id para corresponder aos IDs inseridos acima)
-- Assumindo que as categories foram inseridas na ordem: 1=Reciclagem, 2=Mobilidade, 3=Consumo, 4=Energia, 5=Comunitárias, 6=Teste
INSERT INTO actions (title, description, category_id, points, created_at, updated_at) VALUES
('Separar o lixo reciclavel', 'Coletar e separar plástico, papel e metal para reciclagem', 1, 10, '2025-11-01 01:12:51', '2025-11-01 01:12:51'),
('Levar óleo usado para ponto de coleta', 'Entregar óleo de cozinha usado em locais de descarte correto', 1, 9, '2025-11-01 01:17:32', '2025-11-01 01:17:32'),
('Ir trabalhar de bicicleta', 'Substituir o carro por bicicleta pelo menos uma vez por semana', 2, 10, '2025-11-01 01:19:58', '2025-11-01 01:19:58'),
('Usar garrafa reutilizavel', 'Reduzir o consumo de plásticos descartáveis', 3, 5, '2025-11-01 01:21:44', '2025-11-01 01:21:44'),
('Reduzir o tempo de banho', 'Diminuir o desperdícios de água e energia elétrica', 4, 8, '2025-11-01 01:22:59', '2025-11-01 01:22:59'),
('Participar de multirão', 'Limpeza de parques, rios ou praias', 5, 10, '2025-11-01 01:24:05', '2025-11-01 01:24:05')
ON CONFLICT DO NOTHING;

-- Inserir User Actions (ajustando IDs conforme necessário)
-- Assumindo user_id=1 e action_id baseado nos IDs inseridos acima
INSERT INTO user_actions (user_id, action_id, quantity, date, created_at, updated_at) VALUES
(1, 5, 12, '2025-11-07', '2025-11-07 22:55:59', '2025-11-07 22:55:59'),
(1, 6, 10, '2025-10-25', '2025-11-07 23:08:50', '2025-11-07 23:08:50'),
(1, 3, 1, '2025-10-28', '2025-11-07 23:12:32', '2025-11-07 23:12:32'),
(1, 3, 1, '2025-10-28', '2025-11-07 23:13:15', '2025-11-07 23:13:15')
ON CONFLICT DO NOTHING;


