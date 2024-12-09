<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact us</title>
  <?php include("includes/header.php") ?>
  <div class="contact-body">
    <div class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="con-details">
              <h2>A School Management System streamlines administration and communication.
              </h2>
              <h3>Get a demo to better understand how to:</h3>
              <ul>
                <li>Streamline administrative tasks like admissions, attendance, and fee management effortlessly.
                </li>
                <li>Enhance teacher-parent communication through real-time updates and portals.
                </li>
                <li>Automate scheduling, exam management, and generate detailed performance reports.





                </li>
              </ul>
            </div>
            <div class="contact-social">
              <h2>Follow Us On:</h2>
              <div class="social-details">
                <ul>
                  <li>
                    <a target="_blank" href="https://www.facebook.com/"><i
                        class="fa-brands fa-facebook "
                        style="color: #316ff6"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.instagram.com/"><i
                        class="fa-brands fa-instagram "
                        style="color: #E1306c"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.linkedin.com/"><i
                        class="fa-brands fa-linkedin "
                        style="color: #0077b5"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="https://x.com/"><i
                        class="fa-brands fa-x-twitter "
                        style="color: #000000"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <section class="form-section">
              <div class="container">
                <div class="form-container">
                  <h2 class="form-header">Connect with Our Team</h2>
                  <p class="form-subheader">
                    Please provide your details to get started.
                  </p>
                  <form action="#" method="POST" class="form">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="first-name">First Name<span class="required">*</span></label>
                          <input
                            type="text"
                            id="first-name"
                            name="first_name"
                            class="form-control"
                            placeholder="Enter your first name"
                            required />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="last-name">Last Name<span class="required">*</span></label>
                          <input
                            type="text"
                            id="last-name"
                            name="last_name"
                            class="form-control"
                            placeholder="Enter your last name"
                            required />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="email"> Email</label>
                          <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email" />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="ph">Phone <span class="required">*</span></label>
                          <input
                            type="number"
                            id="ph"
                            name="phone"
                            class="form-control"
                            placeholder="Enter your phone number"

                            required />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="company-name">Institute Name<span class="required">*</span></label>
                      <input
                        type="text"
                        id="company-name"
                        name="company_name"
                        class="form-control"
                        placeholder="Enter your Institute's name"
                        required />
                    </div>
                    <div class="form-group">
                      <label for="designation-name">Designation<span class="required">*</span></label>
                      <input
                        type="text"
                        id="designation"
                        name="designation"
                        class="form-control"
                        placeholder="Enter your designation"
                        required />
                    </div>
                    <div class="form-group">
                      <label for="team-size">Institute Student Size</label>
                      <select
                        id="team-size"
                        name="team_size"
                        class="form-control"
                        required>
                        <option value="option-value" selected>
                          Select size
                        </option>
                        <option value="100-500">100-500</option>
                        <option value="500-1000">500-1000</option>
                        <option value="1000-2000">1000-2000</option>
                        <option value="2000+">2000+</option>
                      </select>
                    </div>
                    <button
                      type="submit"
                      class="btn btn-primary submit-btn mt-3">
                      Get a Demo
                    </button>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php") ?>