import java.sql.*;

public class Registration {
    public static void main(String[] args) {
        // параметри підключення до бази даних
        String url = "jdbc:postgresql://localhost/myDB";
        String user = "username";
        String password = "password";
        
        // введені дані з форми реєстрації
        String name = "John";
        String email = "john@example.com";
        String password = "password123";
        
        Connection conn = null;
        PreparedStatement pstmt = null;
        try {
            // підключення до бази даних
            conn = DriverManager.getConnection(url, user, password);
            
            // SQL-запит для вставки даних в таблицю
            String sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            
            // підготовка запиту
            pstmt = conn.prepareStatement(sql);
            pstmt.setString(1, name);
            pstmt.setString(2, email);
            pstmt.setString(3, password);
            
            // виконання запиту
            int rows = pstmt.executeUpdate();
            System.out.println(rows + " row(s) inserted.");
        } catch (SQLException e) {
            System.out.println("Error: " + e.getMessage());
        } finally {
            // закриття з'єднання з базою даних
            try {
                if (pstmt != null) pstmt.close();
                if (conn != null) conn.close();
            } catch (SQLException e) {
                System.out.println("Error: " + e.getMessage());
            }
        }
    }
}
