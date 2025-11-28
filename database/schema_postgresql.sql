-- ============================================
-- Script SQL para PostgreSQL - Sistema Bazinga
-- Execute este script no pgAdmin para criar todas as tabelas
-- ============================================

-- Criar tipo ENUM para role de usuário
CREATE TYPE user_role AS ENUM ('user', 'admin');

-- ============================================
-- Tabela: categories
-- ============================================
CREATE TABLE categories (
    id BIGSERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- ============================================
-- Tabela: users
-- ============================================
CREATE TABLE users (
    id BIGSERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role user_role DEFAULT 'user',
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- ============================================
-- Tabela: rewards
-- ============================================
CREATE TABLE rewards (
    id BIGSERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    required_points INTEGER NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- ============================================
-- Tabela: actions
-- ============================================
CREATE TABLE actions (
    id BIGSERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category_id BIGINT NOT NULL,
    points INTEGER NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    CONSTRAINT fk_actions_category 
        FOREIGN KEY (category_id) 
        REFERENCES categories(id) 
        ON DELETE CASCADE
);

-- ============================================
-- Tabela: user_actions
-- ============================================
CREATE TABLE user_actions (
    id BIGSERIAL PRIMARY KEY,
    user_id BIGINT NOT NULL,
    action_id BIGINT NOT NULL,
    quantity INTEGER DEFAULT 1,
    date DATE DEFAULT CURRENT_DATE,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    CONSTRAINT fk_user_actions_user 
        FOREIGN KEY (user_id) 
        REFERENCES users(id) 
        ON DELETE CASCADE,
    CONSTRAINT fk_user_actions_action 
        FOREIGN KEY (action_id) 
        REFERENCES actions(id) 
        ON DELETE CASCADE
);

-- ============================================
-- Tabela: users_rewards
-- ============================================
CREATE TABLE users_rewards (
    id BIGSERIAL PRIMARY KEY,
    user_id BIGINT NOT NULL,
    reward_id BIGINT NOT NULL,
    redeemed_at DATE DEFAULT CURRENT_DATE,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    CONSTRAINT fk_users_rewards_user 
        FOREIGN KEY (user_id) 
        REFERENCES users(id) 
        ON DELETE CASCADE,
    CONSTRAINT fk_users_rewards_reward 
        FOREIGN KEY (reward_id) 
        REFERENCES rewards(id) 
        ON DELETE CASCADE
);

-- ============================================
-- Tabela: sessions (Laravel)
-- ============================================
CREATE TABLE sessions (
    id VARCHAR(255) PRIMARY KEY,
    user_id BIGINT,
    ip_address VARCHAR(45),
    user_agent TEXT,
    payload TEXT NOT NULL,
    last_activity INTEGER NOT NULL
);

CREATE INDEX idx_sessions_user_id ON sessions(user_id);
CREATE INDEX idx_sessions_last_activity ON sessions(last_activity);

-- ============================================
-- Tabela: migrations (Laravel)
-- ============================================
CREATE TABLE migrations (
    id BIGSERIAL PRIMARY KEY,
    migration VARCHAR(255) NOT NULL,
    batch INTEGER NOT NULL
);

-- ============================================
-- Índices adicionais para melhor performance
-- ============================================
CREATE INDEX idx_actions_category_id ON actions(category_id);
CREATE INDEX idx_user_actions_user_id ON user_actions(user_id);
CREATE INDEX idx_user_actions_action_id ON user_actions(action_id);
CREATE INDEX idx_users_rewards_user_id ON users_rewards(user_id);
CREATE INDEX idx_users_rewards_reward_id ON users_rewards(reward_id);

-- ============================================
-- Fim do script
-- ============================================

