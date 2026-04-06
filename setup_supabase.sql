-- ════════════════════════════════════════════════════════════
--  SETUP SUPABASE — Portfolio Yoki
--  Jalankan di: Supabase Dashboard → SQL Editor → New Query
-- ════════════════════════════════════════════════════════════

-- 1. Buat tabel portfolio
CREATE TABLE IF NOT EXISTS portfolio (
  name TEXT PRIMARY KEY,   -- ID dokumen (profile, about, experience, dll.)
  data JSONB NOT NULL      -- isi data dalam format JSON
);

-- 2. Aktifkan Row Level Security (RLS)
ALTER TABLE portfolio ENABLE ROW LEVEL SECURITY;

-- 3. Izinkan siapa saja membaca (untuk index.html publik)
CREATE POLICY "public_read" ON portfolio
  FOR SELECT
  USING (true);

-- 4. Izinkan write hanya untuk user yang sudah login (admin.html)
CREATE POLICY "auth_write" ON portfolio
  FOR ALL
  USING (auth.role() = 'authenticated')
  WITH CHECK (auth.role() = 'authenticated');

-- ════════════════════════════════════════════════════════════
--  LANGKAH SELANJUTNYA (di luar SQL Editor):
--
--  1. Buka Authentication → Users → Add User
--     Masukkan email & password admin kamu
--
--  2. Buka Settings → API
--     Copy "Project URL" dan "anon public key"
--     Paste ke js/supabase-config.js
-- ════════════════════════════════════════════════════════════
